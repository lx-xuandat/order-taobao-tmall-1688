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
 * Class PackageDecorator
 * 
 * @property int $id
 * @property int|null $user_id
 * @property int|null $package_id
 * @property string $label
 * @property string $key
 * @property string $value_text
 * @property float $value_numeric
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Package|null $package
 * @property Supplier|null $user
 *
 * @package App\Models
 */
class PackageDecorator extends Model
{
	use HasFactory;
	use RelationshipTrait;
	protected $table = 'package_decorators';

	protected $casts = [
		'user_id' => 'int',
		'package_id' => 'int',
		'value_numeric' => 'float'
	];

	protected $fillable = [
		'user_id',
		'package_id',
		'label',
		'key',
		'value_text',
		'value_numeric'
	];

	public function package()
	{
		return $this->belongsTo(Package::class);
	}

	public function user()
	{
		return $this->belongsTo(Supplier::class);
	}
}
