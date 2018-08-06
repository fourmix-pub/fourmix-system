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
        $userId = request('user_id');
        if (request('user_id') == null){
            $userId = auth()->user()->id;
        }
        $user = User::find($userId);
        $weekSchedules = WeekSchedule::where('user_id', $user->id)->orderBy('date', 'desc')->paginate(5);
        $users = User::all();
        return compact( 'userId', 'user', 'weekSchedules', 'users');
    }
}