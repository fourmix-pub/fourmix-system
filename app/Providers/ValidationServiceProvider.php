<?php

namespace App\Providers;

use App\Models\Daily;
use Carbon\Carbon;
use function foo\func;
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
            return request()->user()
                    ->dailies()
                    ->where('date', $date)
                    ->where(function ($query) use ($value) {
                        $query->where('start', '<', $value)
                            ->where('end', '>', $value)
                            ->orWhere(function ($query) {
                                $query->where('start', '>=', request('start'))
                                    ->where('end', '<=', request('end'));
                            });
                    })->count() === 0;
        });

        Validator::extend('endTime', function ($attribute, $value, $parameters, $validator) {
            $value = Carbon::parse($value);
            $date = Carbon::parse(request('date'));
            return request()->user()->dailies()
                    ->where('date', $date)
                    ->where('start', '<', $value)
                    ->where('end', '>', $value)->count() === 0;
        });

        // 今日以前の日付　now →　今日
        Validator::replacer('after_or_equal', function ($message, $attribute, $rule, $parameters) {
            if($parameters[0] == 'today') {
                return str_replace(':date', '今日', $message);
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
