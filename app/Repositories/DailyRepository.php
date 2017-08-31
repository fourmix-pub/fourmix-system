<?php

namespace App\Repositories;

use App\Contracts\Tools\CalculateContract;
use App\Models\Daily;
use App\Models\Department;
use App\Models\JobType;
use App\Models\Project;
use App\Models\WorkType;
use App\Contracts\Repositories\DailyRepositoryContract;
use App\User;
use Carbon\Carbon;

class DailyRepository implements DailyRepositoryContract
{
    /**
     * 計算契約（インターフェース）
     * @var CalculateContract
     */
    protected $calculate;

    /**
     * DailyRepository constructor.
     */
    public function __construct(CalculateContract $calculate)
    {
        $this->calculate = $calculate;
    }

    /**
     * 日報リソース取得（ビュー用）.
     * @return mixed
     */
    public function dailyResourcesForView()
    {
        $dailies = Daily::latest();
        $dailiesSelect = Daily::all();

        if ($userId = request('user_id')) {
            $dailies = $dailies->where('user_id', $userId);
        }

        if ($projectId = request('project_id')) {
            $dailies = $dailies->where('project_id', $projectId);
        }

        if ($workTypeId = request('work_type_id')) {
            $dailies = $dailies->where('work_type_id', $workTypeId);
        }

        if ($startDate = request('start_date')) {
            $dailies = $dailies->where('date', '>=', $startDate);
        }

        if ($endDate = request('end_date')) {
            $dailies = $dailies->where('date', '<=', $endDate);
        }

        $dailies = $dailies->paginate(10);
        $users = User::all();
        $projects = Project::all();
        $workTypes = WorkType::all();

        return compact('dailies', 'dailiesSelect', 'users', 'userId', 'projects', 'projectId', 'workTypes', 'workTypeId', 'startDate', 'endDate');
    }

    /**
     * 日報資源取得（インデックス用）.
     * @return mixed
     */
    public function dailyResourcesForIndex()
    {
        $dailies = Daily::where('date', Carbon::now()->toDateString())->get();

        $projects = Project::all();
        $workTypes = WorkType::all();
        $jobTypes = JobType::all();

        return compact('dailies', 'projects', 'workTypes', 'jobTypes');
    }

    /**
     * 日報更新.
     * @return mixed
     */
    public function update($request, Daily $daily)
    {
        $daily->date = $request->get('date');
        $daily->project_id = $request->get('project_id');
        $daily->work_type_id = $request->get('work_type_id');
        $daily->note = $request->get('note');

        return $daily->update();
    }

    /**
     * プロジェクト別集計表資源取得契約.
     * @return mixed
     */
    public function analyticsByProject()
    {
        $project = null;

        if ($projectId = request('project_id')) {
            $project = Project::where('id', $projectId)->get()->first();
        }

        $projectsSelect = Project::all();

        return compact('projectsSelect', 'project', 'projectId');
    }

    /**
     * 担当者別集計表資源取得契約.
     * @return mixed
     */
    public function analyticsByUser()
    {
        $user = null;

        if ($userId = request('user_id')) {
            $user = User::where('id', $userId)->get()->first();
        }

        $usersSelect = User::all();

        return compact('usersSelect', 'user', 'userId');
    }

    /**
     * 日報新規作成.
     * @param $request
     * @return mixed
     */
    public function create($request)
    {
        $daily = new Daily();

        $daily->user_id = $request->user()->id;
        $daily->date = $request->get('date');
        $daily->project_id = $request->get('project_id');
        $daily->work_type_id = $request->get('work_type_id');
        $daily->job_type_id = $request->get('job_type_id');
        $daily->note = $request->get('note');
        $daily->start = $request->get('start');
        $daily->end = $request->get('end');
        $daily->rest = $request->get('rest');

        $daily->time = $this->calculate->dailyTime($daily);
        $daily->cost = $this->calculate->dailyCost($daily, $request->user());

        return $daily->save();
    }
}
