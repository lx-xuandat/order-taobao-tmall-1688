<?php

namespace App\Repositories;

use App\Enums\UserType;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\SupplierRepository;
use App\Models\Supplier;
use App\Validators\SupplierValidator;

/**
 * Class SupplierRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class SupplierRepositoryEloquent extends BaseRepository implements SupplierRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Supplier::class;
    }

    public function firstOrCreateShop(array $request) {
        return $this->model::factory([
            ...$request,
            'type' => UserType::ShopTQ
        ]);
    }


}
