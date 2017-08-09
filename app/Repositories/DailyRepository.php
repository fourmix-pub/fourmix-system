<?php

namespace App\Repositories;

use App\Models\Daily;
use App\Models\Department;
use App\Models\JobType;
use App\Models\Project;
use App\Models\WorkType;
use App\Contracts\Repositories\DailyRepositoryContract;
use App\User;

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

        if($userId = request('user_id')){
            $dailies = $dailies->where('user_id', $userId);
        }

        if($projectId = request('project_id')){
            $dailies = $dailies->where('project_id', $projectId);
        }

        if($departmentId = request('department_id')){
            $dailies = $dailies->where('department_id', $departmentId);
        }

        if($workTypeId = request('work_type_id')){
            $dailies = $dailies->where('work_type_id', $workTypeId);
        }

        $dailies = $dailies->paginate(10);
        $users = User::all();
        $projects = Project::all();
        $departments = Department::all();
        $workTypes = WorkType::all();
        $jobTypes = JobType::all();

        return compact('dailies', 'dailiesSelect', 'users', 'userId', 'projects', 'projectId', 'departments', 'departmentId', 'workTypes', 'workTypeId','jobTypes');
    }
}
