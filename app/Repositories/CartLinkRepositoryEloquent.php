<?php

namespace App\Repositories;

use App\Repositories\CartLinkRepository;
use App\Models\CartLink;

/**
 * Class CartLinkRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class CartLinkRepositoryEloquent extends BaseRepository implements CartLinkRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return CartLink::class;
    }

    public function updateMsgToShop($customerId, $input)
    {
        return $this->model
            ->where('customer_id', $customerId)
            ->where('id', $input['cart_link_id'])
            ->update([
                'msg_to_shop' => $input['msg_to_shop'],
            ]);
    }
}
