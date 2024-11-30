<?php

namespace App\Http\Controllers;

use App\Enums\OrderStatus;
use App\Exceptions\AddToCartException;
use App\Http\Requests\AddToCartRequest;
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

    /**
     * CartsController constructor.
     *
     * @param CartRepository $repository
     */
    public function __construct(CartRepository $repository)
    {
        $this->repository = $repository;
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
}
