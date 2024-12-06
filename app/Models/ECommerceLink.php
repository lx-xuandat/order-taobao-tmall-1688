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
 * Class ECommerceLink
 * 
 * @property int $id
 * @property int $shop_id
 * @property string $title
 * @property string $item_link
 * @property string $thumbnail
 * @property float $price
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Supplier $shop
 * @property Collection|CartLink[] $cart_links_where_ec_link
 * @property Collection|Item[] $items_where_ec_link
 * @property Collection|PurchaseOrder[] $purchase_orders_where_ec_link
 *
 * @package App\Models
 */
class ECommerceLink extends Model
{
	use HasFactory;
	use RelationshipTrait;
	protected $table = 'e_commerce_links';

	protected $casts = [
		'shop_id' => 'int',
		'price' => 'float'
	];

	protected $fillable = [
		'shop_id',
		'title',
		'item_link',
		'thumbnail',
		'price'
	];

	public function shop()
	{
		return $this->belongsTo(Supplier::class, 'shop_id');
	}

	public function cart_links_where_ec_link()
	{
		return $this->hasMany(CartLink::class, 'ec_link_id');
	}

	public function items_where_ec_link()
	{
		return $this->hasMany(Item::class, 'ec_link_id');
	}

	public function purchase_orders_where_ec_link()
	{
		return $this->hasMany(PurchaseOrder::class, 'ec_link_id');
	}
}
