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
        //追加成功/失敗レスポンスマクロ
        Response::macro('save', function ($result) {
            if ($result) {
                return redirect()->back()->with('status', '追加しました');
            } else {
                return redirect()->back()->withErrors('追加できませんでした');
            }
        });
        //更新成功/失敗レスポンスマクロ
        Response::macro('update', function ($result) {
            if ($result) {
                return redirect()->back()->with('status', '編集しました');
            } else {
                return redirect()->back()->withErrors('編集できませんでした');
            }
        });
        //削除成功/失敗レスポンスマクロ
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
