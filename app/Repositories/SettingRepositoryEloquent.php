<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Repositories\AdminRepository;
use App\Models\Service;

/**
 * Class AdminRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class AdminRepositoryEloquent extends BaseRepository implements AdminRepository
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
