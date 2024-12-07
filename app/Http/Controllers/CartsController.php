<?php

namespace App\Http\Controllers;

use App\Enums\OrderStatus;
use App\Exceptions\AddToCartException;
use App\Http\Requests\AddToCartRequest;
use App\Http\Requests\CartLinkUpdateRequest;
use App\Http\Requests\ItemQuantityUpdateRequest;
use App\Repositories\CartLinkRepository;
use App\Repositories\CartRepository;

/**
 * Class CartsController.
 *
 * @package namespace App\Http\Controllers;
 */
class CartsController extends Controller
{
    /**
     * @var CartRepository
     */
    protected $repository;

    protected $cartLinkRepository;

    /**
     * CartsController constructor.
     *
     * @param CartRepository $repository
     */
    public function __construct(CartRepository $repository, CartLinkRepository $cartLinkRepository)
    {
        $this->repository = $repository;
        $this->cartLinkRepository = $cartLinkRepository;
    }

    public function index()
    {
        $customerId = auth('web')->user()->id;
        $carts = $this->repository->getMyCart($customerId);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $carts,
            ]);
        }

        return view('zynix.cart', compact('carts'));
    }

    public function addToCart(AddToCartRequest $request)
    {
        try {
            $origin = $request->header('Origin');

            $webs = ['https://item.taobao.com', 'https://detail.tmall.com'];

            if (in_array($origin, $webs)) {
                $uid = auth()->id();
                $item = [
                    ...$request->input('product'),
                    ...clean_link_item_taobao($request->input('product.link')),
                    'customer_id' => $uid,
                    'status' => OrderStatus::ItemInCart->value,
                ];
                $cart = [
                    ...$request->input('shop'),
                    'customer_id' => $uid,
                    'status' => OrderStatus::ItemInCart->value,
                ];
            } else {
                throw (new AddToCartException())->WebsiteNotSupport();
            }

            $cart = $this->repository->addItemToCart($uid, $item, $cart);

            $response = [
                'message' => 'Sản phẩm đã có trong giỏ hàng. Cảm ơn quí khách!!!',
                'data'    => $cart->toArray(),
            ];

            if ($request->wantsJson()) {
                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (\Exception $e) {
            if ($e->getCode() != 1) {
                logger(
                    'add-to-cart',
                    [
                        'message' => $e->getMessage(),
                        'file' => $e->getFile(),
                        'line' => $e->getLine(),
                        'code' => $e->getCode(),
                    ]
                );
            }

            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessage()
                ], 422);
            }

            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CartLinkUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function updateCartLink(CartLinkUpdateRequest $request)
    {
        try {
            $service = $request->except(['link_id']);

            $this->cartLinkRepository
                ->where('id', $request->link_id)
                ->where('customer_id', auth()->id)
                ->update([
                    'services_json' => $service,
                ]);

            $data = $this->cartLinkRepository->find($request->link_id);

            $response = [
                'message' => 'Services updated.',
                'data'    => $data->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (\Exception $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessage()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }

    public function updateItemQuantity(ItemQuantityUpdateRequest $request)
    {
        try {
            $item = $this->repository->updateItemQuantity(auth('web')->id, $request->input('item'));

            $response = [
                'message' => 'Item updated.',
                'data'    => $item->toArray(),
            ];

            if ($request->wantsJson()) {
                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (\Exception $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessage()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }
}
