<?php

namespace App\Repositories;


use App\Contracts\Repositories\DepartmentRepositoryContract;
use App\Models\Department;

class DepartmentRepository implements DepartmentRepositoryContract
{

    /**
     * リソース取得
     * @return mixed
     */
    public function departmentResources()
    {
        $departments = Department::latest()->paginate(10);

        return compact('departments');
    }

    /**
     * 更新
     * @param $request
     * @param Department $department
     * @return mixed
     */
    public function update($request, Department $department)
    {
        $department->name = $request->get('name');

        return $department->update();
    }

    /**
     * 新規作成
     * @param $request
     * @return mixed
     */
    public function create($request)
    {
        $department = new Department();
        $department->name = $request->get('name');

        return $department->save();
    }
}