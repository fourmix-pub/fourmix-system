<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\WorkTypePreProjectAnalysisResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkTypePreProjectAnalysisController extends Controller
{
    /**
     * プロジェクト別に作業分類を取得
     * @param Request $request
     * @return WorkTypePreProjectAnalysisResource
     */
    public function index(Request $request)
    {
        return WorkTypePreProjectAnalysisResource::collection($request->projrct()->sumByWorkType());
    }
}
