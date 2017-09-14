<?php

namespace App\Repositories;

use App\Models\WorkType;
use App\Contracts\Repositories\WorkTypeRepositoryContract;

class WorkTypeRepository implements WorkTypeRepositoryContract
{
    /**
     * 作業分類リソース取得.
     * @return mixed
     */
    public function workTypeResources()
    {
        $workTypes = WorkType::paginate(10);

        return compact('workTypes');
    }

    /**
     * 更新.
     * @param $request
     * @param WorkType $workType
     * @return mixed
     */
    public function update($request, WorkType $workType)
    {
        $workType->name = $request->get('name');

        return $workType->update();
    }

    /**
     * 新規作成.
     * @param $request
     * @return mixed
     */
    public function create($request)
    {
        $workType = new WorkType();
        $workType->name = $request->get('name');

        return $workType->save();
    }
}
