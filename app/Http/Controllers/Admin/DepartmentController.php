<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    /**
     *部門 管理　
     *
     * @return mixed
     */
    public function index()
    {
        return view('admin.department.index');
    }

}
