<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\ProjectPreUserAnalysisResource;
use App\Models\Daily;
use App\Http\Controllers\Controller;

class ProjectPreUserAnalysisController extends Controller
{
    /**
     * 担当者別にプロジェクトを取得
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return ProjectPreUserAnalysisResource::collection(Daily::userFilter()->get());
    }
}
