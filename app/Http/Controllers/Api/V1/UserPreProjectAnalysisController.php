<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\UserPreProjectAnalysisResource;
use App\Http\Controllers\Controller;
use App\Models\Project;

class UserPreProjectAnalysisController extends Controller
{
    /**
     * プロジェクト別に担当者を取得
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $project = null;

        if ($projectId = request('project_id')) {
            $project = Project::where('id', $projectId)
                ->where('can_display', 0)->first();
        }

        return UserPreProjectAnalysisResource::collection($project->sumByUser);
    }
}
