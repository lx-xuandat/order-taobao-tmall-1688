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
 * Class Tracking
 * 
 * @property int $id
 * @property string $trackingable_type
 * @property int $trackingable_id
 * @property string|null $timeline
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Tracking extends Model
{
	use HasFactory;
	use RelationshipTrait;
	protected $table = 'trackings';

	protected $casts = [
		'trackingable_id' => 'int'
	];

	protected $fillable = [
		'trackingable_type',
		'trackingable_id',
		'timeline'
	];
}
