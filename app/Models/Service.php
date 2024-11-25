<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Service
 * 
 * @property int $id
 * @property string $name
 * @property string $value
 * @property int $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 *
 * @package App\Models
 */
class Service extends Model
{
	use HasFactory;
	protected $table = 'services';

	protected $casts = [
		'created_by' => 'int'
	];

	protected $fillable = [
		'name',
		'value',
		'created_by'
	];

	public function created_by()
	{
		return $this->belongsTo(Human::class, 'created_by');
	}
}
