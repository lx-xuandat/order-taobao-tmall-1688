<?php

namespace App\Repositories;

use App\Enums\OrderStatus;
use App\Enums\UserType;
use App\Enums\VoucherType;
use Prettus\Repository\Eloquent\BaseRepository;
use App\Repositories\CartRepository;
use App\Models\Cart;
use App\Models\Item;
use App\Models\User;
use SebastianBergmann\Type\VoidType;

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
                [
                    // 'sub_total',
                    // 'delivery',
                    // 'pickup_point',
                    // 'discount',
                    // 'shipping_charges',
                    // 'tax',
                    // 'voucher_id' => VoucherType::None->value,
                    // 'status'
                ]
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
        $withCartDetail = function ($cart) use ($customerId) {
            return $cart
                ->select([
                    'carts.*',
                    'products.title as product_title',
                    'products.link as product_link',
                    \DB::raw('items.quantity * items.price AS total'),
                ])
                ->join('items', 'items.cart_id', '=', 'carts.id')
                ->join('products', 'products.id', '=', 'items.product_id')
                ->where('po_status', OrderStatus::ItemInCart->value)
                // ->where('parent_id', '<>', null)
                ->where('carts.customer_id', $customerId);
        };

        $carts = $this
            ->with(['carts_where_shop' => $withCartDetail])
            ->whereHas('carts_where_shop', $withCartDetail)
            ->findWhere(
                [
                    'type' => UserType::ShopTQ->value,
                ],
                [
                    'id',
                    'name as shop',
                    'website',
                ]
            );

        return $carts;
    }


    /**
     *
     */
    public function getFirstOrCreateCart($customerId, array $shop)
    {
        $withShop = function ($builder) use ($shop) {
            return $builder->where('website', $shop['website']);
        };

        $cart = $this
            ->with(['shop' => $withShop])
            ->whereHas('shop', $withShop)
            ->where([
                'customer_id' => $customerId,
            ])
            ->firstOr(function () use ($shop, $customerId, $withShop) {
                return $this->model()::factory()->create([
                    'customer_id' => $customerId,
                    'shop_id' => $this->shop->firstOrCreateShop($shop),
                    'voucher_id' => VoucherType::None->value,
                ]);
            });

        return $cart;
    }
}
