<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\JobTypeResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobTypeController extends Controller
{
    /**
     * 勤務分類一覧取得
     * @param Request $request
     * @return JobTypeResource
     */
    public function index(Request $request)
    {
        return JobTypeResource::collection($request->jobType());
    }
}
