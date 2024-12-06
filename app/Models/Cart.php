<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Traits\RelationshipTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cart
 * 
 * @property int $id
 * @property int $customer_id
 * @property int $shop_id
 * @property float $sub_total
 * @property int $delivery
 * @property int $pickup_point
 * @property float $discount
 * @property float $shipping_charges
 * @property float $tax
 * @property int|null $voucher_id
 * @property float $money_decorator
 * @property float $total
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Supplier $customer
 * @property Supplier $shop
 * @property Voucher|null $voucher
 * @property Collection|CartLink[] $cart_links
 * @property Collection|Item[] $items
 * @property Collection|Package[] $packages
 * @property Collection|PurchaseOrder[] $purchase_orders
 *
 * @package App\Models
 */
class Cart extends Model
{
	use HasFactory;
	use RelationshipTrait;
	protected $table = 'carts';

	protected $casts = [
		'customer_id' => 'int',
		'shop_id' => 'int',
		'sub_total' => 'float',
		'delivery' => 'int',
		'pickup_point' => 'int',
		'discount' => 'float',
		'shipping_charges' => 'float',
		'tax' => 'float',
		'voucher_id' => 'int',
		'money_decorator' => 'float',
		'total' => 'float',
		'status' => 'int'
	];

	protected $fillable = [
		'customer_id',
		'shop_id',
		'sub_total',
		'delivery',
		'pickup_point',
		'discount',
		'shipping_charges',
		'tax',
		'voucher_id',
		'money_decorator',
		'total',
		'status'
	];

	public function customer()
	{
		return $this->belongsTo(Supplier::class, 'customer_id');
	}

	public function shop()
	{
		return $this->belongsTo(Supplier::class, 'shop_id');
	}

	public function voucher()
	{
		return $this->belongsTo(Voucher::class);
	}

	public function cart_links()
	{
		return $this->hasMany(CartLink::class);
	}

	public function items()
	{
		return $this->hasMany(Item::class);
	}

	public function packages()
	{
		return $this->hasMany(Package::class);
	}

	public function purchase_orders()
	{
		return $this->hasMany(PurchaseOrder::class);
	}
}
