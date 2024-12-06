<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\PackageDecoratorRepository;
use App\Models\PackageDecorator;
use App\Validators\PackageDecoratorValidator;

/**
 * Class PackageDecoratorRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class PackageDecoratorRepositoryEloquent extends BaseRepository implements PackageDecoratorRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return PackageDecorator::class;
    }



    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
