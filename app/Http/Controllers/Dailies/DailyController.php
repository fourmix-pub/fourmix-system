<?php

namespace App\Http\Controllers\Dailies;

use App\Contracts\Repositories\DailyRepositoryContract;
use App\Contracts\Repositories\DepartmentRepositoryContract;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DailyController extends Controller
{
    /**
     * 日報倉庫契約
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
}
