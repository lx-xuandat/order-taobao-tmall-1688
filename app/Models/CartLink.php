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
 * Class CartLink
 * 
 * @property int $id
 * @property int $cart_id
 * @property int $ec_link_id
 * @property int $customer_id
 * @property array|null $services_json
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Cart $cart
 * @property Supplier $customer
 * @property ECommerceLink $ec_link
 * @property Collection|Item[] $items
 *
 * @package App\Models
 */
class CartLink extends Model
{
	use HasFactory;
	use RelationshipTrait;
	protected $table = 'cart_links';

	protected $casts = [
		'cart_id' => 'int',
		'ec_link_id' => 'int',
		'customer_id' => 'int',
		'services_json' => 'json'
	];

	protected $fillable = [
		'cart_id',
		'ec_link_id',
		'customer_id',
		'services_json'
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

	public function items()
	{
		return $this->hasMany(Item::class);
	}
}
