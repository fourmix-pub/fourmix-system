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
        Validator::extend('startTime', function ($attribute, $value, $parameters, $validator) {
            $value = Carbon::parse($value);
            $date = Carbon::parse(request('date'));
            return request()->user()->dailies()
                    ->where('date', $date)
                    ->where('start', '<', $value)
                    ->where('end', '>', $value)
                    ->orWhere(function ($query) {
                        $query->where('date', $date)
                            ->where('start', '>=', request('start'))
                            ->where('end', '<=', request('end'));
                    })
                    ->count() === 0;
        });

        Validator::extend('endTime', function ($attribute, $value, $parameters, $validator) {
            $value = Carbon::parse($value);
            $date = Carbon::parse(request('date'));
            return request()->user()->dailies()
                    ->where('date', $date)
                    ->where('start', '<', $value)
                    ->where('end', '>', $value)->count() === 0;
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
