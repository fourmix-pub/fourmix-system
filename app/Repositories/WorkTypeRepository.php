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
}