<?php

namespace App\Http\Controllers\Settings;

use App\Models\WorkType;
use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\WorkTypeRequest;
use App\Contracts\Repositories\WorkTypeRepositoryContract;

class WorkTypeController extends Controller
{
    /**
     * @var WorkTypeRepositoryContract
     */
    protected $repository;

    /**
     * WorkTypeController constructor.
     */
    public function __construct(WorkTypeRepositoryContract $repository)
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
        return view('settings.work-types.index', $this->repository->workTypeResources());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkTypeRequest $request)
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
    public function update(WorkTypeRequest $request, WorkType $workType)
    {
        return response()->update($this->repository->update($request, $workType));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkType $workType)
    {
        return response()->delete($workType->delete());
    }
}
