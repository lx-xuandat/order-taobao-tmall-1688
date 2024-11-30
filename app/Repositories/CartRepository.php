<?php

namespace App\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface CartRepository.
 *
 * @package namespace App\Repositories;
 */
interface CartRepository extends RepositoryInterface
{
    public function addItemToCart($uid, array $item, array $cart);
}
