<?php

namespace App\Contracts\Tools;


use App\Models\Daily;
use App\User;

interface CalculateContract
{
    /**
     * 日報から作業時間を算出する契約
     * @param Daily $daily
     * @return mixed
     */
    public function dailyTime(Daily $daily);

    /**
     * 日報から総費用を算出する契約
     * @param Daily $daily
     * @return mixed
     */
    public function dailyCost(Daily $daily, User $user);
}
