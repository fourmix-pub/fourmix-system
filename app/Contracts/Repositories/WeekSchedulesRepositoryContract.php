<?php

namespace App\Contracts\Repositories;

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
     * 個人予定新規作成
     *
     */
    public function create($request);

    /**
     * 個人予定更新.
     *
     */
    public function update($request);

    }