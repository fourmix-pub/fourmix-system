<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkController extends Controller
{
    /**
     *勤務 分類　
     *
     * @return mixed
     */
    public function index()
    {
        return view('admin.work.index');
    }

}
