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
 * Class Comment
 * 
 * @property int $id
 * @property int $user_id
 * @property int|null $comment_id
 * @property string $commentable_type
 * @property int $commentable_id
 * @property string $content
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Comment|null $comment
 * @property Supplier $user
 * @property Collection|Comment[] $comments
 *
 * @package App\Models
 */
class Comment extends Model
{
	use HasFactory;
	use RelationshipTrait;
	protected $table = 'comments';

	protected $casts = [
		'user_id' => 'int',
		'comment_id' => 'int',
		'commentable_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'comment_id',
		'commentable_type',
		'commentable_id',
		'content'
	];

	public function comment()
	{
		return $this->belongsTo(Comment::class);
	}

	public function user()
	{
		return $this->belongsTo(Supplier::class);
	}

	public function comments()
	{
		return $this->hasMany(Comment::class);
	}
}
