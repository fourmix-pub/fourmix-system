<?php
/**
 * Created by PhpStorm.
 * User: YUTA
 * Date: 2017/07/31
 * Time: 18:54
 */

namespace App\Contracts\Repositories;

use App\Models\WorkType;

interface WorkTypeRepositoryContract
{
    /**
     *
     * リソース取得契約
     * @return mixed
     */
    public function workTypeResources();

    /**
     *
     * 更新契約
     * @param $request
     * @param WorkType $workType
     * @return mixed
     */
    public function workTypeUpdate($request, WorkType $workType);

    /**
     *
     * 保存契約
     * @param $request
     * @return mixed
     */
    public function workTypeStore($request);
}