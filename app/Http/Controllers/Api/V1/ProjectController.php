<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\ProjectResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * プロジェクト一覧取得
     * @param Request $request
     * @return ProjectResource
     */
    public function index(Request $request)
    {
        return ProjectResource::collection($request->project());
    }
}
