<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\ProjectPreUserAnalysisResource;
use App\Http\Controllers\Controller;
use App\User;

class ProjectPreUserAnalysisController extends Controller
{
    /**
     * 担当者別にプロジェクトを取得
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $user = null;

        if ($userId = request('user_id')) {
            $user = User::where('id', $userId)->first();
        }

        try {
            return ProjectPreUserAnalysisResource::collection($user->sumByProject);
        } catch (\Exception $exception) {
            return response()->json([
                'message' => 'ErrorException',
                'errors' => [
                    'project_id' => [
                        '該当するデータが存在しません。'
                    ]
                ]
            ], 422);
        }
    }
}
