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
 * Class InvoiceDecorator
 * 
 * @property int $id
 * @property int $invoice_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Invoice $invoice
 *
 * @package App\Models
 */
class InvoiceDecorator extends Model
{
	use HasFactory;
	use RelationshipTrait;
	protected $table = 'invoice_decorator';

	protected $casts = [
		'invoice_id' => 'int'
	];

	protected $fillable = [
		'invoice_id'
	];

	public function invoice()
	{
		return $this->belongsTo(Invoice::class);
	}
}
