<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class ResponseMacroServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('save', function ($result) {
            if ($result) {
                return redirect()->back()->with('status', '追加しました');
            } else {
                return redirect()->back()->withErrors('追加できませんでした');
            }
        });
        Response::macro('update', function ($result) {
            if ($result) {
                return redirect()->back()->with('status', '編集しました');
            } else {
                return redirect()->back()->withErrors('編集できませんでした');
            }
        });
        Response::macro('delete', function ($result) {
            if ($result) {
                return redirect()->back()->with('status', '削除しました');
            } else {
                return redirect()->back()->withErrors('削除できませんでした');
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
