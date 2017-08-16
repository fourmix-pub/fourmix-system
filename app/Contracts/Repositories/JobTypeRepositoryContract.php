<?php

namespace App\Contracts\Repositories;

use App\Models\JobType;

interface JobTypeRepositoryContract
{
    /**
     * 勤務分類資源取得契約.
     * @return mixed
     */
    public function jobTypeResources();

    /**
     * 勤務分類新規作成契約.
     * @return mixed
     */
    public function create($request);

    /**
     * 勤務分類更新契約.
     * @return mixed
     */
    public function update($request, JobType $jobType);
}
