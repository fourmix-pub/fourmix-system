<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\WorkTypePreUserAnalysisResource;
use App\Models\Daily;
use App\Http\Controllers\Controller;

class WorkTypePreUserAnalysisController extends Controller
{
    /**
     * 担当者別に作業分類を取得
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return WorkTypePreUserAnalysisResource::collection(Daily::userFilter()->get());
    }
}
