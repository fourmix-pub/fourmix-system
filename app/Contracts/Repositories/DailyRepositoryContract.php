<?php

namespace App\Contracts\Repositories;

use App\Models\Daily;

interface DailyRepositoryContract
{
    /**
     * 日報資源取得契約.
     * @return mixed
     */
    public function dailyResources();

    /**
     * 日報更新契約.
     * @return mixed
     */
    public function update($request, Daily $daily);

    /**
     * プロジェクト別集計表資源取得契約.
     * @return mixed
     */
    public function analyticsByProject();

    /**
     * 担当者別集計表資源取得契約.
     * @return mixed
     */
    public function analyticsByUser();
}
