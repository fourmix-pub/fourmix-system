<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\UserPreProjectAnalysisResource;
use App\Models\Daily;
use App\Http\Controllers\Controller;

class UserPreProjectAnalysisController extends Controller
{
    /**
     * プロジェクト別に担当者を取得
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return UserPreProjectAnalysisResource::collection(Daily::projectFilter()->get());
    }
}
