<?php

namespace App\Repositories;

use App\Enums\OrderStatus;
use App\Enums\UserType;
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
    protected ECommerceLinkRepository $ecLink;
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
        $this->ecLink = app(ECommerceLinkRepository::class);
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

            $item = $this->item->model->firstOrNew(
                [
                    'customer_id' => $uid,
                    'sku_link' => $_item['sku_link'],
                    'status' => OrderStatus::ItemInCart->value,
                ],
                $_item
            );

            if ($item->cart_id == null) {
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

                $ecLink = $this->ecLink->updateOrCreate(
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

                $cartLink = $cart->cart_links()->updateOrCreate([
                    'ec_link_id' => $ecLink->id,
                    'customer_id' => $uid,
                ], [

                    'services_json' => [
                        'dong_go' => false,
                        'kiem_dem' => false,
                    ],
                ]);

                $item->cart_id = $cart->id;
                $item->cart_link_id = $cartLink->id;
                $item->shop_id = $shop->id;
                $item->ec_link_id = $ecLink->id;
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
                    'items.id as item_id',
                    'e_commerce_links.id as ec_link_id',
                    'e_commerce_links.thumbnail as ec_link_thumbnail',
                    \DB::raw('items.quantity * items.price AS total'),
                ])
                // ->with('cart_link')
                // ->with('comments')
                ->join('e_commerce_links', 'e_commerce_links.id', '=', 'items.ec_link_id')
                ->where('items.status', OrderStatus::ItemInCart->value)
                ->where('items.customer_id', $customerId)
            ;
        };

        $carts = $this
            ->with('shop')
            ->with(['cart_links' => function ($builder) use ($itemsInCart) {
                return $builder->select([
                    'e_commerce_links.*',
                    'cart_links.*',
                    'cart_links.id as cart_link_id',
                ])
                    ->with(['items' => $itemsInCart])
                    ->join('e_commerce_links', 'e_commerce_links.id', '=', 'cart_links.ec_link_id');
            }])
            // ->with(['items' => $itemsInCart])
            ->whereHas('items', $itemsInCart)
            ->findWhere([
                'status' => OrderStatus::ItemInCart->value
            ]);
        // dd($carts);
        return $carts;
    }

    public function updateItemQuantity($customerId, $input)
    {
        return $this->item
            ->where('customer_id', $customerId)
            ->update([
                'quantity' => $input['item_quantity'],
            ], $input['item_id']);
    }
}
