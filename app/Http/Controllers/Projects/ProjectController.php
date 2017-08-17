<?php

namespace App\Http\Controllers\Projects;

use App\Contracts\Repositories\ProjectRepositoryContract;
use App\Http\Requests\Settings\ProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * プロジェクト倉庫契約（インンターフェース）.
     * @var ProjectRepositoryContract
     */
    protected $repository;

    /**
     * ProjectController constructor.
     */
    public function __construct(ProjectRepositoryContract $repository)
    {
        $this->repository =  $repository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('project.index', $this->repository->projectResources());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        return response()->save($this->repository->create($request));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, Project $project)
    {
        return response()->update($this->repository->update($request, $project));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        return response()->delete($project->delete());
    }


    public function details()
    {
        return view('project.details', $this->repository->details());
    }
}