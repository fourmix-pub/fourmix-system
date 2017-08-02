<?php

namespace App\Contracts\Repositories;


use App\Models\JobType;

interface JobTypeRepositoryContract
{
    /**
     * リソース取得契約.
     * @return mixed
     */
    public function jobTypeResources();

    /**
     * 新規作成契約
     * @return mixed
     */
    public function create($request);

    /**
     * 更新契約
     * @return mixed
     */
    public function update($request, JobType $jobType);
}
