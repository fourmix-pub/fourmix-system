<?php

namespace App\Http\Controllers\Config;

use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
    /**
     *プロフィール　
     *
     * @return mixed
     */
    public function index()
    {
        return view('config.index');
    }

    /**
     *パスワード変更.
     *
     * @return mixed
     */
    public function resetPassword()
    {
        return view('config.password');
    }
}
