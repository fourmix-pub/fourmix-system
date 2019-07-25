<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\UserPreProjectAnalysisResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserPreProjectAnalysisController extends Controller
{
    /**
     * プロジェクト別に担当者を取得
     * @param Request $request
     * @return UserPreProjectAnalysisResource
     */
    public function index(Request $request)
    {
        return UserPreProjectAnalysisResource::collection($request->projrct()->sumByUser());
    }
}
