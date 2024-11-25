<?php

namespace App\Repositories;

use App\Enums\POTracking;
use App\Enums\UserRole;
use Prettus\Repository\Eloquent\BaseRepository;
use App\Repositories\CartRepository;
use App\Models\Cart;

/**
 * Class CartRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class CartRepositoryEloquent extends BaseRepository implements CartRepository
{

    protected ShopRepository $shop;
    protected ProductRepository $product;
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Cart::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->product = app(ProductRepository::class);
        $this->shop = app(ShopRepository::class);
    }

    public function addToCart($unique, array $request): Cart
    {
        try {
            \DB::beginTransaction();
            $update = true;
            $cart = $this->model
                ->where([
                    'customer_id' => $unique['customer_id'],
                    'item_id' => $unique['item_id'],
                    'sku_id' => $unique['sku_id'],
                    'po_status' => POTracking::CHUA_GUI_DON->value,
                ])
                ->firstOr(function () use ($request, &$update, $unique) {
                    $update = false;
                    $model = $this->make([
                        ...$request,
                        'customer_id' => $unique['customer_id'],
                        'item_id' => $unique['item_id'],
                        'sku_id' => $unique['sku_id'],
                        'po_status' => POTracking::CHUA_GUI_DON->value,
                    ]);

                    $shop = $this->shop->model->firstOrCreate(
                        [
                            'type' => UserRole::ShopTQ->value,
                            'website' => clean_link_shop($request['shop']['shop_link']),
                            'name' => $request['shop']['shop_name']
                        ],
                        [
                            'name' => $request['shop']['shop_name'],
                            'website' => clean_link_shop($request['shop']['shop_link']),
                            'type' => UserRole::ShopTQ->value,
                        ]
                    );

                    $item = $this->product->model->firstOrCreate(
                        [
                            'item_id' => $unique['item_id'],
                            'china_shop_id' => $shop->id,
                            'sku_id' => 'null',
                        ],
                        [
                            'item_id' => $unique['item_id'],
                            'link' => $request['item_link'],
                            'title' => $request['item_title'],
                            'picture'  => $request['item_picture'],
                            'china_shop_id' => $shop->id,
                            'price' => $request['item_price'],

                        ]
                    );

                    $model->shop_id = $shop->id;
                    $model->product_id = $item->id;
                    $model->item_id = $item->item_id;
                    $model->sku_id = $unique['sku_id'];

                    $model->save();

                    return $model;
                });

            if ($update) {
                $cart->update([
                    'item_quantity' => $cart->item_quantity + $request['item_quantity'],
                    'item_price' => $request['item_price'],
                ]);
            }
            \DB::commit();
            return $cart;
        } catch (\Exception $e) {
            \DB::rollBack();

            throw $e;
        }
    }
}
