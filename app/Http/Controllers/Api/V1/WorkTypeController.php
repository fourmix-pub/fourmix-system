<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\WorkTypeResource;
use App\Models\WorkType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkTypeController extends Controller
{
    /**
     * 作業分類一覧取得
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return WorkTypeResource::collection(WorkType::all());
    }
}
