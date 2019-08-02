<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\ProjectResource;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{

    /**
     * プロジェクト一覧取得
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return ProjectResource::collection(Project::with(['user','customer'])->latest()->get());
    }
}
