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
 * Class Item
 * 
 * @property int $id
 * @property int|null $cart_id
 * @property int $product_id
 * @property int $shop_id
 * @property int $customer_id
 * @property int $status
 * @property int $quantity
 * @property float $price
 * @property string $sku_link
 * @property string $sku
 * @property string $thumbnail
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Cart|null $cart
 * @property Supplier $customer
 * @property Product $product
 * @property Supplier $shop
 * @property Collection|PurchaseOrder[] $purchase_orders
 *
 * @package App\Models
 */
class Item extends Model
{
	use HasFactory;
	use RelationshipTrait;
	protected $table = 'items';

	protected $casts = [
		'cart_id' => 'int',
		'product_id' => 'int',
		'shop_id' => 'int',
		'customer_id' => 'int',
		'status' => 'int',
		'quantity' => 'int',
		'price' => 'float'
	];

	protected $fillable = [
		'cart_id',
		'product_id',
		'shop_id',
		'customer_id',
		'status',
		'quantity',
		'price',
		'sku_link',
		'sku',
		'thumbnail'
	];

	public function cart()
	{
		return $this->belongsTo(Cart::class);
	}

	public function customer()
	{
		return $this->belongsTo(Supplier::class, 'customer_id');
	}

	public function product()
	{
		return $this->belongsTo(Product::class);
	}

	public function shop()
	{
		return $this->belongsTo(Supplier::class, 'shop_id');
	}

	public function purchase_orders()
	{
		return $this->hasMany(PurchaseOrder::class);
	}
}
