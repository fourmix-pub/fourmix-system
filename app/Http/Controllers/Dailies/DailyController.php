<?php

namespace App\Http\Controllers\Dailies;

use App\Http\Controllers\Controller;
use App\Contracts\Repositories\DailyRepositoryContract;

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
}
