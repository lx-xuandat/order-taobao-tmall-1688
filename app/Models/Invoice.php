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
 * Class Invoice
 * 
 * @property int $id
 * @property string $invoiceable_type
 * @property int $invoiceable_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|InvoiceDecorator[] $invoice_decorators
 *
 * @package App\Models
 */
class Invoice extends Model
{
	use HasFactory;
	use RelationshipTrait;
	protected $table = 'invoices';

	protected $casts = [
		'invoiceable_id' => 'int'
	];

	protected $fillable = [
		'invoiceable_type',
		'invoiceable_id'
	];

	public function invoice_decorators()
	{
		return $this->hasMany(InvoiceDecorator::class);
	}
}
