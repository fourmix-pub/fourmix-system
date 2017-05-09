<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     *担当者 管理　
     *
     * @return mixed
     */
    public function index()
    {
        return view('admin.user.index');
    }

}
