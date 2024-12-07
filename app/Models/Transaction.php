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
 * Class Transaction
 * 
 * @property int $id
 * @property int|null $transaction_id
 * @property string $transactionable_type
 * @property int $transactionable_id
 * @property Carbon $transaction_time
 * @property int $owner_id
 * @property int $employee_id
 * @property float $in
 * @property float $out
 * @property bool $status
 * @property float $debits
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Supplier $employee
 * @property Supplier $owner
 * @property Transaction|null $transaction
 * @property Collection|Transaction[] $transactions
 *
 * @package App\Models
 */
class Transaction extends Model
{
	use HasFactory;
	use RelationshipTrait;
	protected $table = 'transactions';

	protected $casts = [
		'transaction_id' => 'int',
		'transactionable_id' => 'int',
		'transaction_time' => 'datetime',
		'owner_id' => 'int',
		'employee_id' => 'int',
		'in' => 'float',
		'out' => 'float',
		'status' => 'bool',
		'debits' => 'float'
	];

	protected $fillable = [
		'transaction_id',
		'transactionable_type',
		'transactionable_id',
		'transaction_time',
		'owner_id',
		'employee_id',
		'in',
		'out',
		'status',
		'debits'
	];

	public function employee()
	{
		return $this->belongsTo(Supplier::class, 'employee_id');
	}

	public function owner()
	{
		return $this->belongsTo(Supplier::class, 'owner_id');
	}

	public function transaction()
	{
		return $this->belongsTo(Transaction::class);
	}

	public function transactions()
	{
		return $this->hasMany(Transaction::class);
	}
}
