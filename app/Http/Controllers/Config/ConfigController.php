<?php

namespace App\Http\Controllers\Config;

use Illuminate\Http\Request;
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
}
