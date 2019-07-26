<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\JobTypeResource;
use App\Models\JobType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobTypeController extends Controller
{

    /**
     * 勤務分類一覧取得
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return JobTypeResource::collection(JobType::all());
    }
}
