<?php

namespace App\Providers;

use App\Contracts\Repositories\WorkTypeRepositoryContract;
use App\Repositories\WorkTypeRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Contracts\Repositories\CustomerRepositoryContract',
            'App\Repositories\CustomerRepository'
        );

        $this->app->bind(
            'App\Contracts\Repositories\WorkTypeRepositoryContract',
            'App\Repositories\WorkTypeRepository'
        );
    }
}