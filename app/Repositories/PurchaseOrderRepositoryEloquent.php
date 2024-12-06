<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\PurchaseOrderRepository;
use App\Models\PurchaseOrder;
use App\Validators\PurchaseOrderValidator;

/**
 * Class PurchaseOrderRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class PurchaseOrderRepositoryEloquent extends BaseRepository implements PurchaseOrderRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return PurchaseOrder::class;
    }



    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
