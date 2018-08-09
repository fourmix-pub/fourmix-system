<?php

namespace App\Http\Controllers\Schedules;

use App\WeekSchedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contracts\Repositories\WeekSchedulesRepositoryContract;


class WeekScheduleController extends Controller
{

   protected  $repository;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WeekSchedule  $weekSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(WeekSchedule $weekSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WeekSchedule  $weekSchedule
     * @return \Illuminate\Http\Response
     */
    public function edit(WeekSchedule $weekSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WeekSchedule  $weekSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WeekSchedule $weekSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WeekSchedule  $weekSchedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(WeekSchedule $weekSchedule)
    {
        //
    }


}
