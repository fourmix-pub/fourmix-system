<?php

namespace App\Contracts\Repositories;

use App\Models\WorkType;

interface WorkTypeRepositoryContract
{
    /**
     * 作業分類資源取得契約.
     * @return mixed
     */
    public function workTypeResources();

    /**
     * 作業分類更新契約.
     * @param $request
     * @param WorkType $workType
     * @return mixed
     */
    public function update($request, WorkType $workType);

    /**
     * 作業分類新規作成契約.
     * @param $request
     * @return mixed
     */
    public function create($request);
}
