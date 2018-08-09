<?php

namespace App\Repositories;

use App\Contracts\Repositories\WeekSchedulesRepositoryContract;
use App\Models\WeekSchedule;
use App\User;
use Illuminate\Support\Collection;

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

    /**
     * 個人予定新規作成 取得.
     *
     */

    public function createResources()
    {
            $collections = collect ([]);
            $weeks = 4;
            for ($cont = 0; $cont < $weeks; $cont++) {
                $date = \Carbon\Carbon::now()->addWeeks($cont)->startOfWeek();
                $collections->push(['key'=>$date->format('Y-m-d'), 'value'=>$date->format('m月d日')]);
            }
            return compact('collections');
    }

    /**
     * 個人予定新規作成.
     *
     */

    public function create($request)
    {
        $schedule = new WeekSchedule();
        $schedule->user_id = auth()->user()->id;
        $schedule->date = $request->get('date');
        $schedule->schedule = $request->get('schedule');
        $schedule->result = $request->get('result');
        $schedule->share = $request->get('share');

        return $schedule->save();
    }

    /**
     * 個人予定更新.
     *
     */
    public function update($request)
    {
        $schedule = new WeekSchedule();
        $schedule->user_id = auth()->user()->id;
        $schedule->date = $request->get('date');
        $schedule->schedule = $request->get('schedule');
        $schedule->result = $request->get('result');
        $schedule->share = $request->get('share');

        return $schedule->update();
    }
}