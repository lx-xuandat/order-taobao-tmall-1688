<?php

namespace App\Repositories;

interface BaseRepositoryInterface
{
    public function whereFirstOrMake(array $where, array $item);
}
