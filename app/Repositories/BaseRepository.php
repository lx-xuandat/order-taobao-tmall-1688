<?php

namespace App\Repositories;

abstract class BaseRepository extends \Prettus\Repository\Eloquent\BaseRepository implements BaseRepositoryInterface
{
    public function whereFirstOrMake(array $where, array $item)
    {
        return $this
            ->where([...$where])
            ->firstOr(fn() => $this->make([
                ...$item,
                ...$where,
            ]));
    }
}
