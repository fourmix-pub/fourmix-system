<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\WorkTypeResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkTypeController extends Controller
{
    /**
     * 作業分類一覧取得
     * @param Request $request
     * @return WorkTypeResource
     */
    public function index(Request $request)
    {
        return WorkTypeResource::collection($request->workType());
    }
}
