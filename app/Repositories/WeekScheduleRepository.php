<?php

namespace App\Repositories;

use App\Contracts\Repositories\WeekSchedulesRepositoryContract;
use App\Models\WeekSchedule;
use App\User;

class WeekScheduleRepository implements WeekSchedulesRepositoryContract
{
    /**
     * 個人予定資源取得.
     *
     */
    public function weekScheduleResources()
    {
        $user = User::find(1);
        $weekSchedules = $user->weekSchedules;
        $userId = request('user_id');
        return compact( 'userId', 'user', 'weekSchedules');
    }
}