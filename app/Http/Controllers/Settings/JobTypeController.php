<?php

namespace App\Http\Controllers\Settings;

use App\Models\JobType;
use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\JobTypeRequest;
use App\Contracts\Repositories\JobTypeRepositoryContract;

class JobTypeController extends Controller
{
    /**
     * 勤務分類倉庫契約（インターフェース）.
     * @var JobTypeRepositoryContract
     */
    protected $repository;

    protected $nav = 'settings';

    /**
     * JobTypeController constructor.
     */
    public function __construct(JobTypeRepositoryContract $repository)
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
        return view('settings.job-types.index', $this->repository->jobTypeResources())->with('nav', $this->nav)->with('mode', 'job-type');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobTypeRequest $request)
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
    public function update(JobTypeRequest $request, JobType $jobType)
    {
        return response()->update($this->repository->update($request, $jobType));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobType $jobType)
    {
        return response()->delete($jobType->delete());
    }
}
