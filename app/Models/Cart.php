<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cart
 * 
 * @property int $id
 * @property int $product_id
 * @property int $shop_id
 * @property int $customer_id
 * @property string $item_id
 * @property string $sku_id
 * @property int $po_status
 * @property string $sku_name
 * @property int $item_quantity
 * @property float $item_price
 * @property string $item_link
 * @property string $item_title
 * @property string $item_picture
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Human $customer
 * @property Product $product
 * @property Human $shop
 *
 * @package App\Models
 */
class Cart extends Model
{
	use HasFactory;
	protected $table = 'carts';

	protected $casts = [
		'product_id' => 'int',
		'shop_id' => 'int',
		'customer_id' => 'int',
		'po_status' => 'int',
		'item_quantity' => 'int',
		'item_price' => 'float'
	];

	protected $fillable = [
		'product_id',
		'shop_id',
		'customer_id',
		'item_id',
		'sku_id',
		'po_status',
		'sku_name',
		'item_quantity',
		'item_price',
		'item_link',
		'item_title',
		'item_picture'
	];

	public function customer()
	{
		return $this->belongsTo(Human::class, 'customer_id');
	}

	public function product()
	{
		return $this->belongsTo(Product::class);
	}

	public function shop()
	{
		return $this->belongsTo(Human::class, 'shop_id');
	}
}
