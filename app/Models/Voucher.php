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
 * Class Voucher
 * 
 * @property int $id
 * @property string $name
 * @property int $total
 * @property string $description
 * @property float $invoice_min
 * @property float $discount_max
 * @property int $active
 * @property Carbon $expire_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Cart[] $carts
 *
 * @package App\Models
 */
class Voucher extends Model
{
	use HasFactory;
	use RelationshipTrait;
	protected $table = 'vouchers';

	protected $casts = [
		'total' => 'int',
		'invoice_min' => 'float',
		'discount_max' => 'float',
		'active' => 'int',
		'expire_date' => 'datetime'
	];

	protected $fillable = [
		'name',
		'total',
		'description',
		'invoice_min',
		'discount_max',
		'active',
		'expire_date'
	];

	public function carts()
	{
		return $this->hasMany(Cart::class);
	}
}
