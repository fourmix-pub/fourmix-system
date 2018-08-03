<?php

namespace App\Providers;

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
        //担当者レポジトリ契約登録
        $this->app->bind(
            'App\Contracts\Repositories\UserRepositoryContract',
            'App\Repositories\UserRepository'
        );
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
        //部門分類レポジトリー契約登録
        $this->app->bind(
            'App\Contracts\Repositories\DepartmentRepositoryContract',
            'App\Repositories\DepartmentRepository'
        );
        //日報レポジトリー契約登録
        $this->app->bind(
            'App\Contracts\Repositories\DailyRepositoryContract',
            'App\Repositories\DailyRepository'
        );
        //プロジェクトレポジトリー契約
        $this->app->bind(
            'App\Contracts\Repositories\ProjectRepositoryContract',
            'App\Repositories\ProjectRepository'
        );
        //プロジェクト個人予算レポジトリー契約
        $this->app->bind(
            'App\Contracts\Repositories\PersonalBudgetRepositoryContract',
            'App\Repositories\PersonalBudgetRepository'
        );
        //計算レポジトリー契約
        $this->app->bind(
            'App\Contracts\Tools\CalculateContract',
            'App\Tools\Analytics\Calculate'
        );
        //
        $this->app->bind(
            'App\Contracts\Repositories\EventRepositoryContract',
            'App\Repositories\EventRepository'
        );
    }
}
