<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\WorkTypePreProjectAnalysisResource;
use App\Models\Daily;
use App\Http\Controllers\Controller;

class WorkTypePreProjectAnalysisController extends Controller
{
    /**
     * プロジェクト別に作業分類を取得
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return WorkTypePreProjectAnalysisResource::collection(Daily::projectFilter()->get());
    }
}
