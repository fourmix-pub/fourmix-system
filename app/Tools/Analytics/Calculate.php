<?php

namespace App\Tools\Analytics;


use App\Contracts\Tools\CalculateContract;
use App\Models\Daily;
use App\User;
use Carbon\Carbon;

class Calculate implements CalculateContract
{

    /**
     * 日報から作業時間を算出する
     * @param Daily $daily
     * @return mixed
     */
    public function dailyTime(Daily $daily)
    {
        $start = Carbon::parse($daily->start);
        $end = Carbon::parse($daily->end);

        return (double)(round(($start->diffInMinutes($end) - $daily->rest)  / 60, 1));
    }

    /**
     * 日報から作業費用を算出する
     * @param Daily $daily
     * @return mixed
     */
    public function dailyCost(Daily $daily, User $user)
    {
        return (int)($daily->time * $user->cost);
    }
}