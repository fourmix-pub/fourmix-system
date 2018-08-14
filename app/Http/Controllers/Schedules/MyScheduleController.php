<?php

namespace App\Http\Controllers\Schedules;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contracts\Repositories\WeekSchedulesRepositoryContract;
use Illuminate\Support\Collection;
use App\Models\WeekSchedule;
use App\Http\Requests\Settings\WeekScheduleRequest;

class MyScheduleController extends Controller
{
    protected $repository;

    public function __construct(WeekSchedulesRepositoryContract $repository)
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
        return view('layouts.my-schedules.index', $this->repository->weekScheduleResources());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.my-schedules.create', $this->repository->createResources());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param WeekScheduleRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(WeekScheduleRequest $request)
    {
        return response()->save($this->repository->create($request));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WeekSchedule $weekSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(WeekSchedule $weekSchedule)
    {
        return view('layouts.my-schedules.show', compact('weekSchedule'),
            $this->repository->weekScheduleResources());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WeekSchedule  $weekSchedule
     * @return \Illuminate\Http\Response
     */
    public function edit(WeekSchedule $weekSchedule)
    {
        return view('layouts.my-schedules.edit', compact('weekSchedule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param WeekScheduleRequest $request
     * @param  \App\Models\WeekSchedule $weekSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(WeekScheduleRequest $request, WeekSchedule $weekSchedule)
    {
        return response()->update($this->repository->update($request, $weekSchedule));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WeekSchedule $weekSchedule
     * @return void
     */
    public function destroy(WeekSchedule $weekSchedule)
    {
        //return response()->delete(WeekSchedule::find($request->get('weekSchedule'))
        //->users()->detach($request->get('user_id')));
    }
}
