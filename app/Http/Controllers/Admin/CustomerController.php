<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    /**
     *顧客管理　
     *
     * @return mixed
     */
    public function index()
    {
        return view('admin.customer.index');
    }
}
