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
 * Class Quotation
 * 
 * @property int $id
 * @property string $name
 * @property string $key
 * @property float|null $from_money
 * @property float|null $price
 * @property string|null $unit
 * @property string $description
 * @property Carbon $from_date
 * @property Carbon $end_date
 * @property int $admin_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Supplier $admin
 *
 * @package App\Models
 */
class Quotation extends Model
{
	use HasFactory;
	use RelationshipTrait;
	protected $table = 'quotations';

	protected $casts = [
		'from_money' => 'float',
		'price' => 'float',
		'from_date' => 'datetime',
		'end_date' => 'datetime',
		'admin_id' => 'int'
	];

	protected $fillable = [
		'name',
		'key',
		'from_money',
		'price',
		'unit',
		'description',
		'from_date',
		'end_date',
		'admin_id'
	];

	public function admin()
	{
		return $this->belongsTo(Supplier::class, 'admin_id');
	}
}
