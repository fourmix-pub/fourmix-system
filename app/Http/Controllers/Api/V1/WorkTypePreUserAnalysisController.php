<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\WorkTypePreUserAnalysisResource;
use App\Http\Controllers\Controller;
use App\User;

class WorkTypePreUserAnalysisController extends Controller
{
    /**
     * 担当者別に作業分類を取得
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $user = null;

        if ($userId = request('user_id')) {
            $user = User::where('id', $userId)->first();
        }

        try {
            return WorkTypePreUserAnalysisResource::collection($user->sumByWorkType);
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
