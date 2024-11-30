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
 * Class Product
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
 * @property Collection|Item[] $items
 * @property Collection|PurchaseOrder[] $purchase_orders
 *
 * @package App\Models
 */
class Product extends Model
{
	use HasFactory;
	use RelationshipTrait;
	protected $table = 'products';

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

	public function items()
	{
		return $this->hasMany(Item::class);
	}

	public function purchase_orders()
	{
		return $this->hasMany(PurchaseOrder::class);
	}
}
