<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property int $id
 * @property int $china_shop_id
 * @property string $item_id
 * @property string $sku_id
 * @property string $title
 * @property string $link
 * @property string $picture
 * @property float $price
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Human $china_shop
 * @property Collection|Cart[] $carts
 *
 * @package App\Models
 */
class Product extends Model
{
	use HasFactory;
	protected $table = 'products';

	protected $casts = [
		'china_shop_id' => 'int',
		'price' => 'float'
	];

	protected $fillable = [
		'china_shop_id',
		'item_id',
		'sku_id',
		'title',
		'link',
		'picture',
		'price'
	];

	public function china_shop()
	{
		return $this->belongsTo(Human::class, 'china_shop_id');
	}

	public function carts()
	{
		return $this->hasMany(Cart::class);
	}
}
