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
 * Class CartItem
 * 
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class CartItem extends Model
{
	use HasFactory;
	use RelationshipTrait;
	protected $table = 'cart_items';
}
