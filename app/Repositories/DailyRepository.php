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
use Illuminate\Support\Facades\Auth;

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
        $projects = Project::all()->where('can_display', 0);
        $workTypes = WorkType::all();

        return compact('dailies', 'dailiesSelect', 'users', 'userId', 'projects', 'projectId', 'workTypes', 'workTypeId', 'startDate', 'endDate');
    }

    /**
     * 日報資源取得（インデックス用）.
     * @return mixed
     */
    public function dailyResourcesForIndex()
    {
        $dailies = request()->user()->dailies()->where('date', Carbon::now()->toDateString())->get();
        $projects = Project::all()->where('can_display', 0);
        $workTypes = WorkType::all();
        $jobTypes = JobType::all();
        $date = Carbon::now()->format('Y-m-d');

        $dailiesMonth = request()->user()->dailies()->where('date', '>=', Carbon::now()->startOfMonth()->format('Y-m-d'))
            ->where('date', '<=', Carbon::now()->endOfMonth()->format('Y-m-d'))->get();
        $dailiesJson = [];
        foreach ($dailiesMonth as $daily) {
            $dailyJson = [
                'title' => $daily->project->name.'：'.$daily->workType->name,
                'start' => $daily->date->format('Y-m-d').'T'.$daily->start,
                'end' => $daily->date->format('Y-m-d').'T'.$daily->end,
            ];
            $dailiesJson[] = $dailyJson;
        }
        $dailiesJson = json_encode($dailiesJson);

        return compact('dailies', 'projects', 'workTypes', 'jobTypes', 'date', 'dailiesJson');
    }

    /**
     * 日報日付検索用資源取得（インデックス用）.
     * @return mixed
     */
    public function dailySearchByDate()
    {
        $date = request('date');
        $dailies = request()->user()->dailies()->where('date', $date)->get();
        $projects = Project::all()->where('can_display', 0);
        $workTypes = WorkType::all();
        $jobTypes = JobType::all();

        $dailiesMonth = request()->user()->dailies()->where('date', '>=', Carbon::parse($date)->startOfMonth()->format('Y-m-d'))
            ->where('date', '<=', Carbon::parse($date)->endOfMonth()->format('Y-m-d'))->get();
        $dailiesJson = [];
        foreach ($dailiesMonth as $daily) {
            $dailyJson = [
                'title' => $daily->project->name.'：'.$daily->workType->name,
                'start' => $daily->date->format('Y-m-d').'T'.$daily->start,
                'end' => $daily->date->format('Y-m-d').'T'.$daily->end,
            ];
            $dailiesJson[] = $dailyJson;
        }
        $dailiesJson = json_encode($dailiesJson);

        return compact('dailies', 'projects', 'workTypes', 'jobTypes', 'date', 'dailiesJson');
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
            $project = Project::where('id', $projectId)
                ->where('can_display', 0)->get()->first();
        }

        $projectsSelect = Project::all()->where('can_display', 0);

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
        $daily->rest = (int)$request->get('rest');

        $daily->time = $this->calculate->dailyTime($daily);
        $daily->cost = $this->calculate->dailyCost($daily, $request->user());

        return $daily->save();
    }
}
