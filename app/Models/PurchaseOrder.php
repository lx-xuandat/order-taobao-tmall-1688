<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Traits\RelationshipTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PurchaseOrder
 * 
 * @property int $id
 * @property int $customer_id
 * @property int $item_id
 * @property int $cart_id
 * @property int $ec_link_id
 * @property int $shop_id
 * @property int $status
 * @property string $sku
 * @property int $quantity
 * @property float $price
 * @property string $link
 * @property string $thumbnail
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Cart $cart
 * @property Supplier $customer
 * @property ECommerceLink $ec_link
 * @property Item $item
 * @property Supplier $shop
 *
 * @package App\Models
 */
class PurchaseOrder extends Model
{
	use HasFactory;
	use RelationshipTrait;
	protected $table = 'purchase_orders';

	protected $casts = [
		'customer_id' => 'int',
		'item_id' => 'int',
		'cart_id' => 'int',
		'ec_link_id' => 'int',
		'shop_id' => 'int',
		'status' => 'int',
		'quantity' => 'int',
		'price' => 'float'
	];

	protected $fillable = [
		'customer_id',
		'item_id',
		'cart_id',
		'ec_link_id',
		'shop_id',
		'status',
		'sku',
		'quantity',
		'price',
		'link',
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

	public function ec_link()
	{
		return $this->belongsTo(ECommerceLink::class, 'ec_link_id');
	}

	public function item()
	{
		return $this->belongsTo(Item::class);
	}

	public function shop()
	{
		return $this->belongsTo(Supplier::class, 'shop_id');
	}
}
