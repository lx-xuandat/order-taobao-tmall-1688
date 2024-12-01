<?php

namespace App\Repositories;

use App\Enums\OrderStatus;
use App\Enums\UserType;
use App\Enums\VoucherType;
use Prettus\Repository\Eloquent\BaseRepository;
use App\Repositories\CartRepository;
use App\Models\Cart;
use App\Models\Item;

/**
 * Class CartRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class CartRepositoryEloquent extends BaseRepository implements CartRepository
{

    protected SupplierRepository $shop;
    protected ProductRepository $product;
    protected ItemRepository $item;
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
        $this->shop = app(SupplierRepository::class);
        $this->item = app(ItemRepository::class);
    }

    /**
     * Add Item to Cart
     */
    public function addItemToCart($uid, array $_item, array $_shop): Item
    {
        try {
            \DB::beginTransaction();

            $shop = $this->shop->updateOrCreate(
                [
                    'website' => $_shop['website'],
                    'type' => UserType::ShopTQ->value
                ],
                [
                    'website' => $_shop['website'],
                    'name' => $_shop['name'],
                    'email' =>  $_shop['website'],
                    'address' => 'China',
                    'phone' => 'undefined'
                ],
            );

            $product = $this->product->updateOrCreate(
                [
                    'item_link' => $_item['item_link'],
                    'shop_id' => $shop->id,
                ],
                [
                    ...$_item,
                    // 'link' => $_item['item_link'],
                ]
            );

            $cart = $this->model->updateOrCreate(
                [
                    'customer_id' => $uid,
                    'shop_id' => $shop->id,
                    'status' => OrderStatus::ItemInCart->value
                ],
                $_shop
            );

            $item = $this->item->whereFirstOrMake(
                [
                    'shop_id' => $shop->id,
                    'product_id' => $product->id,
                    'customer_id' => $uid,
                    'sku_link' => $_item['sku_link'],
                    'status' => OrderStatus::ItemInCart->value,
                ],
                $_item
            );

            if ($item->cart_id == null) {
                $item->cart_id = $cart->id;
            } else {
                $item->quantity += $_item['quantity'];
                $item->price = $_item['price'];
                $item->sku = $_item['sku'];
            }
            $item->save();
            \DB::commit();
            return $item;
        } catch (\Exception $e) {
            \DB::rollBack();
            throw $e;
        }
    }

    public function getMyCart($customerId)
    {
        $itemsInCart = function ($builder) use ($customerId) {
            return $builder
                ->select([
                    'items.*',
                    'products.*',
                    \DB::raw('items.quantity * items.price AS total'),
                ])
                ->with('notes')
                ->join('products', 'products.id', '=', 'items.product_id')
                ->where('items.status', OrderStatus::ItemInCart->value)
                ->where('products.customer_id', $customerId)
            ;
        };

        $carts = $this
            ->with('shop')
            ->with(['items' => $itemsInCart])
            ->whereHas('items', $itemsInCart)
            ->findWhere([
                'status' => OrderStatus::ItemInCart->value
            ]);
        return $carts;
    }
}
