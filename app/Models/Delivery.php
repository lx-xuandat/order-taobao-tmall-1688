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
 * Class Delivery
 * 
 * @property int $id
 * @property int|null $deliver_id
 * @property int $package_id
 * @property string $from
 * @property string $to
 * @property int $logistic_id
 * @property int $creator_id
 * @property int $assign_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Supplier $assign
 * @property Supplier $creator
 * @property Delivery|null $deliver
 * @property Supplier $logistic
 * @property Package $package
 * @property Collection|Delivery[] $deliveries_where_deliver
 *
 * @package App\Models
 */
class Delivery extends Model
{
	use HasFactory;
	use RelationshipTrait;
	protected $table = 'deliveries';

	protected $casts = [
		'deliver_id' => 'int',
		'package_id' => 'int',
		'logistic_id' => 'int',
		'creator_id' => 'int',
		'assign_id' => 'int'
	];

	protected $fillable = [
		'deliver_id',
		'package_id',
		'from',
		'to',
		'logistic_id',
		'creator_id',
		'assign_id'
	];

	public function assign()
	{
		return $this->belongsTo(Supplier::class, 'assign_id');
	}

	public function creator()
	{
		return $this->belongsTo(Supplier::class, 'creator_id');
	}

	public function deliver()
	{
		return $this->belongsTo(Delivery::class, 'deliver_id');
	}

	public function logistic()
	{
		return $this->belongsTo(Supplier::class, 'logistic_id');
	}

	public function package()
	{
		return $this->belongsTo(Package::class);
	}

	public function deliveries_where_deliver()
	{
		return $this->hasMany(Delivery::class, 'deliver_id');
	}
}
