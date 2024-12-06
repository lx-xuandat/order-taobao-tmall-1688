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
 * Class Package
 * 
 * @property int $id
 * @property int|null $package_id
 * @property int $customer_id
 * @property int $cart_id
 * @property string $waybill
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Cart $cart
 * @property Supplier $customer
 * @property Package|null $package
 * @property Collection|Delivery[] $deliveries
 * @property Collection|PackageDecorator[] $package_decorators
 * @property Collection|Package[] $packages
 *
 * @package App\Models
 */
class Package extends Model
{
	use HasFactory;
	use RelationshipTrait;
	protected $table = 'packages';

	protected $casts = [
		'package_id' => 'int',
		'customer_id' => 'int',
		'cart_id' => 'int'
	];

	protected $fillable = [
		'package_id',
		'customer_id',
		'cart_id',
		'waybill'
	];

	public function cart()
	{
		return $this->belongsTo(Cart::class);
	}

	public function customer()
	{
		return $this->belongsTo(Supplier::class, 'customer_id');
	}

	public function package()
	{
		return $this->belongsTo(Package::class);
	}

	public function deliveries()
	{
		return $this->hasMany(Delivery::class);
	}

	public function package_decorators()
	{
		return $this->hasMany(PackageDecorator::class);
	}

	public function packages()
	{
		return $this->hasMany(Package::class);
	}
}
