<?php

namespace App\Http\Controllers;

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
        $carts = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $carts,
            ]);
        }

        return view('carts.index', compact('carts'));
    }

    public function addToCart(AddToCartRequest $request)
    {
        try {
            $origin = $request->header('Origin');

            if ($origin == 'https://item.taobao.com') {
                $links = clean_link_item_taobao($request->input('product.item_link'));
                $unique = [
                    ...$links,
                    'customer_id' => auth()->id(),
                    'po_status' => 0,
                ];
            } else {
                throw (new AddToCartException())->WebsiteNotSupport();
            }

            $data = [
                $unique,
                [
                    ...$request->input('shop'),
                    ...$request->input('product'),
                    ...$unique,
                    ...$links,
                    'origin' => $origin,
                    'shop_link' => clean_link_shop($request->input('shop.shop_link')),
                    'shop' => $request->input('shop'),
                ]
            ];

            $cart = $this->repository->addToCart(...$data);

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
