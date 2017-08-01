<?php
/**
 * Created by PhpStorm.
 * User: YUTA
 * Date: 2017/07/31
 * Time: 18:58
 */

namespace App\Repositories;


use App\Contracts\Repositories\WorkTypeRepositoryContract;
use App\Models\WorkType;

class WorkTypeRepository implements WorkTypeRepositoryContract
{

    /**
     *
     * リソース取得
     * @return mixed
     */
    public function workTypeResources()
    {
        $workTypes = WorkType::latest()->get();

        return compact('workTypes');
    }

    /**
     *
     * 更新
     * @param $request
     * @param WorkType $workType
     * @return mixed
     */
    public function workTypeUpdate($request, WorkType $workType)
    {
        $workType->name = $request->get('name');

        return $workType->update();
    }

    /**
     *
     * 保存
     * @param $request
     * @return mixed
     */
    public function workTypeStore($request)
    {
        $workType = new WorkType();
        $workType->name = $request->get('name');

        return $workType->save();
    }
}