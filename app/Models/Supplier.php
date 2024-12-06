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
 * Class Supplier
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property int $type
 * @property string|null $website
 * @property string|null $address
 * @property string|null $phone
 * @property Carbon|null $email_verified_at
 * @property string|null $password
 * @property string|null $current_password
 * @property string|null $password_confirmation
 * @property bool $active
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|CartLink[] $cart_links_where_customer
 * @property Collection|Cart[] $carts_where_customer
 * @property Collection|Cart[] $carts_where_shop
 * @property Collection|Comment[] $comments_where_user
 * @property Collection|Delivery[] $deliveries_where_assign
 * @property Collection|Delivery[] $deliveries_where_creator
 * @property Collection|Delivery[] $deliveries_where_logistic
 * @property Collection|ECommerceLink[] $e_commerce_links_where_shop
 * @property Collection|Item[] $items_where_customer
 * @property Collection|Item[] $items_where_shop
 * @property Collection|PackageDecorator[] $package_decorators_where_user
 * @property Collection|Package[] $packages_where_customer
 * @property Collection|PurchaseOrder[] $purchase_orders_where_customer
 * @property Collection|PurchaseOrder[] $purchase_orders_where_shop
 * @property Collection|Quotation[] $quotations_where_admin
 * @property Collection|Service[] $services_where_created_by
 * @property Collection|Transaction[] $transactions_where_employee
 * @property Collection|Transaction[] $transactions_where_owner
 *
 * @package App\Models
 */
class Supplier extends Model
{
	use HasFactory;
	use RelationshipTrait;
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
		'current_password',
		'password_confirmation',
		'active',
		'remember_token'
	];

	public function cart_links_where_customer()
	{
		return $this->hasMany(CartLink::class, 'customer_id');
	}

	public function carts_where_customer()
	{
		return $this->hasMany(Cart::class, 'customer_id');
	}

	public function carts_where_shop()
	{
		return $this->hasMany(Cart::class, 'shop_id');
	}

	public function comments_where_user()
	{
		return $this->hasMany(Comment::class);
	}

	public function deliveries_where_assign()
	{
		return $this->hasMany(Delivery::class, 'assign_id');
	}

	public function deliveries_where_creator()
	{
		return $this->hasMany(Delivery::class, 'creator_id');
	}

	public function deliveries_where_logistic()
	{
		return $this->hasMany(Delivery::class, 'logistic_id');
	}

	public function e_commerce_links_where_shop()
	{
		return $this->hasMany(ECommerceLink::class, 'shop_id');
	}

	public function items_where_customer()
	{
		return $this->hasMany(Item::class, 'customer_id');
	}

	public function items_where_shop()
	{
		return $this->hasMany(Item::class, 'shop_id');
	}

	public function package_decorators_where_user()
	{
		return $this->hasMany(PackageDecorator::class);
	}

	public function packages_where_customer()
	{
		return $this->hasMany(Package::class, 'customer_id');
	}

	public function purchase_orders_where_customer()
	{
		return $this->hasMany(PurchaseOrder::class, 'customer_id');
	}

	public function purchase_orders_where_shop()
	{
		return $this->hasMany(PurchaseOrder::class, 'shop_id');
	}

	public function quotations_where_admin()
	{
		return $this->hasMany(Quotation::class, 'admin_id');
	}

	public function services_where_created_by()
	{
		return $this->hasMany(Service::class, 'created_by');
	}

	public function transactions_where_employee()
	{
		return $this->hasMany(Transaction::class, 'employee_id');
	}

	public function transactions_where_owner()
	{
		return $this->hasMany(Transaction::class, 'owner_id');
	}
}
