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
        //顧客レポジトリ契約登録
        $this->app->bind(
            'App\Contracts\Repositories\CustomerRepositoryContract',
            'App\Repositories\CustomerRepository'
        );
        //作業分類レポジトリ契約登録
        $this->app->bind(
            'App\Contracts\Repositories\WorkTypeRepositoryContract',
            'App\Repositories\WorkTypeRepository'
        );
        //勤務分類レポジトリー契約登録
        $this->app->bind(
            'App\Contracts\Repositories\JobTypeRepositoryContract',
            'App\Repositories\JobTypeRepository'
        );
    }
}