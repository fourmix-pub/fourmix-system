<?php

namespace App\Http\Controllers\Schedules;

use App\Http\Requests\Settings\WeekScheduleRequest;
use App\Models\WeekSchedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contracts\Repositories\WeekSchedulesRepositoryContract;

class WeekScheduleController extends Controller
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
        return view('layouts.week-schedules.index', $this->repository->weekScheduleResources());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schedule.show', $this->repository->commentCreate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param WeekScheduleRequest $request
     * @return void
     */
    public function store(WeekScheduleRequest $request)
    {
        return response()->save($this->repository->create($request));
    }

    /**
     * Display the specified resource.
     *
     * @param WeekSchedule $weekSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(WeekSchedule $weekSchedule)
    {
        return view('layouts.week-schedules.show', compact('weekSchedule'),
            $this->repository->weekScheduleResources());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param WeekSchedule $weekSchedule
     * @return void
     */
    public function edit(WeekSchedule $weekSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param WeekSchedule $weekSchedule
     * @return void
     */
    public function update(Request $request, WeekSchedule $weekSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param WeekSchedule $weekSchedule
     * @return void
     */
    public function destroy(WeekSchedule $weekSchedule)
    {
        //
    }
}
