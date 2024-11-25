<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
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
        $this->app->bind(\App\Repositories\CartRepository::class, \App\Repositories\CartRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ServicesRepository::class, \App\Repositories\ServicesRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ShopRepository::class, \App\Repositories\ShopRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ProductRepository::class, \App\Repositories\ProductRepositoryEloquent::class);
        //:end-bindings:
    }
}
