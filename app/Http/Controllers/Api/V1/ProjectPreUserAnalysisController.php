<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\ProjectPreUserAnalysisResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectPreUserAnalysisController extends Controller
{
    /**
     * 担当者別にプロジェクトを取得
     * @param Request $request
     * @return ProjectPreUserAnalysisResource
     */
    public function index(Request $request)
    {
        return ProjectPreUserAnalysisResource::collection($request->user()->sumByProject());
    }
}
