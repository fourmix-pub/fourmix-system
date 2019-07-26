<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\DepartmentResource;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    /**
     * 全部署の取得
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return DepartmentResource::collection(Department::all());
    }
}
