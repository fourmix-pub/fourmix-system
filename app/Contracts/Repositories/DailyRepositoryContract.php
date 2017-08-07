<?php

namespace App\Contracts\Repositories;


interface DailyRepositoryContract
{
    /**
     * 日報リソース取得契約.
     * @return mixed
     */
    public function dailyResources();
}