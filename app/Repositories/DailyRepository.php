<?php

namespace App\Repositories;

use App\User;
use App\Models\Daily;
use App\Models\Project;
use App\Models\WorkType;
use App\Contracts\Repositories\DailyRepositoryContract;

class DailyRepository implements DailyRepositoryContract
{
    /**
     * 日報リソース取得.
     * @return mixed
     */
    public function dailyResources()
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
     * 日報更新.
     * @return mixed
     */
    public function update($request, Daily $daily)
    {
        $daily->date = $request->get('date');
        $daily->project_id = $request->get('project_id');
        $daily->work_type_id = $request->get('work_type_id');
        $daily->time = $request->get('time');
        $daily->cost = $request->get('cost');
        $daily->note = $request->get('note');

        return $daily->update();
    }
}
