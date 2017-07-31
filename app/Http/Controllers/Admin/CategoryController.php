<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     *作業分類　
     *
     * @return mixed
     */
    public function index()
    {
        return view('admin.category.index');
    }
}
