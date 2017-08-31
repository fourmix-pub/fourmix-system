<?php

namespace App\Contracts\Repositories;

use App\Models\Daily;

interface DailyRepositoryContract
{
    /**
     * 日報資源取得契約（ビュー用）.
     * @return mixed
     */
    public function dailyResourcesForView();

    /**
     * 日報資源取得契約（インデックス用）.
     * @return mixed
     */
    public function dailyResourcesForIndex();

    /**
     * 日報日付検索用資源取得契約（インデックス用）.
     * @return mixed
     */
    public function dailySearchByDate();

    /**
     * 日報更新契約.
     * @return mixed
     */
    public function update($request, Daily $daily);

    /**
     * 日報新規作成契約.
     * @param $request
     * @return mixed
     */
    public function create($request);

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
