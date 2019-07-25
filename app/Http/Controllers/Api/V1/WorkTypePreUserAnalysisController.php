<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\WorkTypePreUserAnalysisResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkTypePreUserAnalysisController extends Controller
{
    /**
     * 担当者別に作業分類を取得
     * @param Request $request
     * @return WorkTypePreUserAnalysisResource
     */
    public function index(Request $request)
    {
        return WorkTypePreUserAnalysisResource::collection($request->user()->sumByWorkType());
    }
}
