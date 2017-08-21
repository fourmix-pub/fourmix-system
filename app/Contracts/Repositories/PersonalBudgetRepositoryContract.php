<?php

namespace App\Contracts\Repositories;


use App\Models\PersonalBudget;
use App\Models\Project;

interface PersonalBudgetRepositoryContract
{
    /**
     * 個人予算資源取得.
     * @return mixed
     */
    public function personalBudgetResources();

    /**
     * 個人予算更新契約.
     * @param $request
     * @return mixed
     */
    public function update($request);

    /**
     * 個人予算新規作成契約.
     * @param $request
     * @return mixed
     */
    public function create($request);
}