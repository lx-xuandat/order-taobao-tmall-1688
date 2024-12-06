<?php

namespace App\Repositories;

use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ECommerceLinkRepository;
use App\Models\ECommerceLink;

/**
 * Class ECommerceLinkRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ECommerceLinkRepositoryEloquent extends BaseRepository implements ECommerceLinkRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ECommerceLink::class;
    }



    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
