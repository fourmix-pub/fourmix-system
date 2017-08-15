<?php

namespace App\Http\Controllers\Dailies;

use App\Http\Controllers\Controller;
use App\Contracts\Repositories\DailyRepositoryContract;
use App\Http\Requests\Settings\DailyViewRequest;
use App\Models\Daily;
use Illuminate\Http\Request;

class DailyController extends Controller
{
    /**
     * 日報倉庫契約.
     * @var DailyRepositoryContract
     */
    protected $repository;

    /**
     * DailyController constructor.
     */
    public function __construct(DailyRepositoryContract $repository)
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
        return view('daily.index', $this->repository->dailyResources());
    }

    public function view(){
        return view('daily.view', $this->repository->dailyResources());
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DailyViewRequest $request, Daily $daily)
    {
        return response()->update($this->repository->update($request, $daily));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Daily $daily)
    {
        return response()->delete($daily->delete());
    }
}
