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
 * Class Human
 * 
 * @property int $id
 * @property string $name
 * @property string|null $email
 * @property int $type
 * @property string|null $website
 * @property string|null $address
 * @property string|null $phone
 * @property Carbon|null $email_verified_at
 * @property string|null $password
 * @property bool $active
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Cart[] $carts_where_customer
 * @property Collection|Cart[] $carts_where_shop
 * @property Collection|Product[] $products_where_china_shop
 * @property Collection|Service[] $services_where_created_by
 *
 * @package App\Models
 */
class Human extends Model
{
	use HasFactory;
	protected $table = 'users';

	protected $casts = [
		'type' => 'int',
		'email_verified_at' => 'datetime',
		'active' => 'bool'
	];

	protected $hidden = [
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'type',
		'website',
		'address',
		'phone',
		'email_verified_at',
		'password',
		'active',
		'remember_token'
	];

	public function carts_where_customer()
	{
		return $this->hasMany(Cart::class, 'customer_id');
	}

	public function carts_where_shop()
	{
		return $this->hasMany(Cart::class, 'shop_id');
	}

	public function products_where_china_shop()
	{
		return $this->hasMany(Product::class, 'china_shop_id');
	}

	public function services_where_created_by()
	{
		return $this->hasMany(Service::class, 'created_by');
	}
}
