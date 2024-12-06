<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\DeliveryRepository;
use App\Models\Delivery;
use App\Validators\DeliveryValidator;

/**
 * Class DeliveryRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class DeliveryRepositoryEloquent extends BaseRepository implements DeliveryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Delivery::class;
    }



    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
