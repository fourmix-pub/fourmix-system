<?php

namespace App\Contracts\Repositories;

use App\Models\WorkType;

interface WorkTypeRepositoryContract
{
    /**
     * リソース取得契約.
     * @return mixed
     */
    public function workTypeResources();

    /**
     * 更新契約.
     * @param $request
     * @param WorkType $workType
     * @return mixed
     */
    public function update($request, WorkType $workType);

    /**
     * 新規作成契約.
     * @param $request
     * @return mixed
     */
    public function create($request);
}
