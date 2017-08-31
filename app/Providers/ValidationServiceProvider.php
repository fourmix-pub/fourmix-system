<?php

namespace App\Providers;

use App\Models\Daily;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class ValidationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('startTime', function ($attribute, $value, $parameters, $validator){

//            if ($dailies = Daily::where('date', request('date'))) {
//
//                foreach ($dailies as $daily) {
//                    if () {
//
//                    }
//                }
//
//                $value = Carbon::parse($value);
//                $end = Carbon::parse($daily->end);
//
//                return $value->gte($end);
//
//            } else {
//                return true;
//            }

            if ($daily = Daily::where('date', request('date'))->orderBy('end', 'desc')->first()) {

                $value = Carbon::parse($value);
                $end = Carbon::parse($daily->end);

                return $value->gte($end);

            } else {
                return true;
            }
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
