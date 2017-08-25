<?php

namespace App\Http\Controllers\Projects;

use App\Contracts\Repositories\PersonalBudgetRepositoryContract;
use App\Http\Requests\Settings\PersonalBudgetRequest;
use App\Http\Requests\Settings\PersonalBudgetUpdateRequest;
use App\Models\PersonalBudget;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonalBudgetController extends Controller
{
    /**
     * 個人予算倉庫契約（インターフェース）.
     * @var PersonalBudgetRepositoryContract
     */
    protected $repository;

    protected $nav = 'projects';

    /**
     * PersonalBudgetController constructor.
     */
    public function __construct(PersonalBudgetRepositoryContract $repository)
    {
        $this->repository = $repository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index()
    {
        return view('project.personal-budgets', $this->repository->personalBudgetResources())->with('nav', $this->nav);
        ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonalBudgetRequest $request)
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
    public function update(PersonalBudgetUpdateRequest $request)
    {
        return response()->update($this->repository->update($request));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        return response()->delete(Project::find($request->get('project_id'))->users()->detach($request->get('user_id')));
    }

    /**
     * 個人予算別予算対
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function projectPersonalBudgets()
    {
        return view('project.project-personal-budgets', $this->repository->personalBudgetResources())->with('nav', $this->nav);
    }
}
