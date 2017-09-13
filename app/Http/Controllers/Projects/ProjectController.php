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

    protected $nav = 'projects';

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
     * @return mixed
     */
    public function index()
    {
        return view('project.index', $this->repository->projectResources())->with('nav', $this->nav);
        ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProjectRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        return response()->save($this->repository->create($request));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProjectRequest|Request $request
     * @param Project $project
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(ProjectRequest $request, Project $project)
    {
        return response()->update($this->repository->update($request, $project));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Project $project
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy(Project $project)
    {
        return response()->delete($project->delete());
    }

    /**
     * プロジェクト台帳
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function details()
    {
        return view('project.details', $this->repository->details())->with('nav', $this->nav);
    }

    /**
     * プロジェクト別予算対
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function projectBudgets()
    {
        return view('project.project-budgets', $this->repository->projectResources())->with('nav', $this->nav);
    }
}
