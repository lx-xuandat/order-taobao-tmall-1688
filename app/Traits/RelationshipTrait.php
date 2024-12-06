<?php

namespace App\Traits;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

trait RelationshipTrait
{
    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }

    public function invoices(): MorphMany
    {
        return $this->morphMany(Comment::class, 'invoiceable');
    }

    public function invoiceable(): MorphTo
    {
        return $this->morphTo();
    }

    public function transactions(): MorphMany
    {
        return $this->morphMany(Comment::class, 'transactionable');
    }

    public function transactionable(): MorphTo
    {
        return $this->morphTo();
    }

    public function trackings(): MorphMany
    {
        return $this->morphMany(Comment::class, 'trackingable');
    }

    public function trackingable(): MorphTo
    {
        return $this->morphTo();
    }
}
