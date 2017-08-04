<?php

namespace App\Contracts\Repositories;

use App\Models\Department;

interface DepartmentRepositoryContract
{
    /**
     * 部門リソース取得契約
     * @return mixed
     */
    public function departmentResources();

    /**
     * 更新契約
     * @param $request
     * @param Department $department
     * @return mixed
     */
    public function update($request, Department $department);

    /**
     * 新規作成契約
     * @param $request
     * @return mixed
     */
    public function create($request);
}