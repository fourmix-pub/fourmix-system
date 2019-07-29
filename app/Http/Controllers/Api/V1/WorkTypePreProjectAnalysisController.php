<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\WorkTypePreProjectAnalysisResource;
use App\Http\Controllers\Controller;
use App\Models\Project;

class WorkTypePreProjectAnalysisController extends Controller
{
    /**
     * プロジェクト別に作業分類を取得
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $project = null;

        if ($projectId = request('project_id')) {
            $project = Project::where('id', $projectId)
                ->where('can_display', 0)->first();
        }

        return WorkTypePreProjectAnalysisResource::collection($project->sumByWorkType);
    }
}
