<?php

namespace App\Contracts\Repositories;

use App\Models\WeekSchedule;

interface WeekSchedulesRepositoryContract
{

    /**
     * 予定　資源取得契約.
     */
    public function weekScheduleResources();

    /**
     * 個人予定新規作成 資源取得契約.
     *
     */
    public function createResources();

    /**
     * 個人予定新規作成.
     * @param $request
     * @return
     */
    public function create($request);

    /**
     * 個人予定更新.
     * @param $request
     * @param WeekSchedule $weekSchedule
     * @return bool
     */
    public function update($request, WeekSchedule $weekSchedule): bool;
}
