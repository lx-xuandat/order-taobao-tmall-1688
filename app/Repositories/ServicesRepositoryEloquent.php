<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Repositories\ServicesRepository;
use App\Models\Service;

/**
 * Class ServicesRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ServicesRepositoryEloquent extends BaseRepository implements ServicesRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Service::class;
    }

    public function getYuanExRate() {
        $yuan = $this->firstWhere([
            'name' => 'yuan'
        ]);

        return $yuan ? [
            'yuan' => $yuan->value,
        ] : [
            'yuan' => 4000,
        ];
    }
}
