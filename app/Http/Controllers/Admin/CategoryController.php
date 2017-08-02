<?php

namespace App\Http\Controllers\Admin;

use App\Models\WorkType;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     *作業分類　
     *
     * @return mixed
     */
    public function index(WorkType $workType)
    {

        //全件検索
        dd($workType);

        return view('admin.category.index', compact('workType'));
    }
}
