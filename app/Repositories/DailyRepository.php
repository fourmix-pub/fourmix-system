<?php

namespace App\Repositories;

use App\Models\Daily;
use App\Models\JobType;
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
        $dailies = Daily::latest()->get();
        $workTypes = WorkType::all();
        $jobTypes = JobType::all();

        return compact('dailies', 'workTypes', 'jobTypes');
    }
}
