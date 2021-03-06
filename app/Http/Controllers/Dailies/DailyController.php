<?php

namespace App\Http\Controllers\Dailies;

use App\Http\Controllers\Controller;
use App\Contracts\Repositories\DailyRepositoryContract;
use App\Http\Requests\Settings\DailyRequest;
use App\Http\Requests\Settings\DailyViewRequest;
use App\Models\Daily;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DailyController extends Controller
{
    /**
     * 日報倉庫契約（インターフェース）.
     * @var DailyRepositoryContract
     */
    protected $repository;

    protected $nav = 'dailies';

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
     * @return mixed
     */
    public function index()
    {
        return view('daily.index', $this->repository->dailyResourcesForIndex())->with('nav', $this->nav);
    }

    public function searchByDate()
    {
        return view('daily.index', $this->repository->dailySearchByDate())->with('nav', $this->nav);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param DailyRequest|Request $request
     * @return Response
     */
    public function store(DailyRequest $request)
    {
        //追加成功/失敗レスポンスマクロ
        if ($this->repository->create($request)) {
            return redirect()->to(route('dailies.search', ['date' => $request->date], false))->with('status', '追加しました');
        } else {
            return redirect()->to(route('dailies.search', ['date' => $request->date], false))->withErrors('追加できませんでした');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param DailyViewRequest|Request $request
     * @param Daily $daily
     * @return Response
     * @internal param int $id
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

    /**
     * 日報閲覧
     * @return mixed
     */
    public function view()
    {
        return view('daily.view', $this->repository->dailyResourcesForView())->with('nav', $this->nav);
    }

    /**
     * 集計表（プロジェクト別作業分類）
     * @return mixed
     */
    public function workTypesByProject()
    {
        return view('daily.analytics-work-types-by-project', $this->repository->analyticsByProject())->with('nav', $this->nav);
    }

    /**
     * 集計表（プロジェクト別担当者）
     * @return mixed
     */
    public function usersByProject()
    {
        return view('daily.analytics-users-by-project', $this->repository->analyticsByProject())->with('nav', $this->nav);
    }

    /**
     * 集計表（担当者別作業分類）
     * @return mixed
     */
    public function workTypesByUser()
    {
        return view('daily.analytics-work-types-by-user', $this->repository->analyticsByUser())->with('nav', $this->nav);
    }

    /**
     * 集計表（担当者別プロジェクト）
     * @return mixed
     */
    public function projectsByUser()
    {
        return view('daily.analytics-projects-by-user', $this->repository->analyticsByUser())->with('nav', $this->nav);
    }
}
