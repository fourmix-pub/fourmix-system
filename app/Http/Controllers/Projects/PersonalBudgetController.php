<?php

namespace App\Http\Controllers\Projects;

use App\Contracts\Repositories\PersonalBudgetRepositoryContract;
use App\Http\Requests\Settings\PersonalBudgetRequest;
use App\Models\PersonalBudget;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonalBudgetController extends Controller
{
    /**
     * 個人予算倉庫契約（インターフェース）.
     * @var PersonalBudgetRepositoryContract
     */
    protected $repository;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('project.personal-budgets', $this->repository->personalBudgetResources());
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
    public function update(PersonalBudgetRequest $request, PersonalBudget $personalBudget)
    {
        return response()->update($this->repository->update($request, $personalBudget));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonalBudget $personalBudget)
    {

    }
}
