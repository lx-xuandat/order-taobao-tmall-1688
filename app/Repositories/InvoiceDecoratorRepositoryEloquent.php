<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\InvoiceDecoratorRepository;
use App\Models\InvoiceDecorator;
use App\Validators\InvoiceDecoratorValidator;

/**
 * Class InvoiceDecoratorRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class InvoiceDecoratorRepositoryEloquent extends BaseRepository implements InvoiceDecoratorRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return InvoiceDecorator::class;
    }



    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
