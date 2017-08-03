<?php

namespace App\Repositories;

use App\Contracts\Repositories\WorkTypeRepositoryContract;
use App\Models\WorkType;

class WorkTypeRepository implements WorkTypeRepositoryContract
{
    /**
     * リソース取得.
     * @return mixed
     */
    public function workTypeResources()
    {
        $workTypes = WorkType::latest()->paginate(10);

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

