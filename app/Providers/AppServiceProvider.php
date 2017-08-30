<?php

namespace App\Providers;

use App\Models\Daily;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('startTime', function ($attribute, $value, $parameters, $validator){
            $daily = Daily::where('date', request('date'))->orderBy('end', 'desc')->first();
            $value = Carbon::parse($value);
            $end = Carbon::parse($daily->end);

            return $value->lte($end);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
