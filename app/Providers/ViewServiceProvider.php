<?php

namespace App\Providers;

use App\Models\Service;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole() || request()->is('extensions/*') || request()->is('api/*')) {
            return; // Không thực thi nếu chạy qua console hoặc API
        }

        $services = app(Service::class)
            ->select([
                'name',
                'value'
            ])
            ->get()
            ->mapWithKeys(function ($item) {
                $result =  [
                    $item['name'] => $item['value'],
                ];

                if ($item['name'] == 'yuan') {
                    $result['yuan_detail'] = '1 Te = 3500';
                }

                return $result;
            })
            ->toArray()
            ;

        // dd($services);
        // array:2 [▼ // app/Providers/ViewServiceProvider.php:36
        //     "yuan" => "3500"
        //     "te" => "5000"
        // ]


        View::share('service', $services);
    }
}
