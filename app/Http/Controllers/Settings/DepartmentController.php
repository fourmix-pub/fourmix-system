<?php

namespace App\Http\Controllers\Settings;

use App\Contracts\Repositories\DepartmentRepositoryContract;
use App\Http\Requests\Settings\DepartmentRequest;
use App\Models\Department;
use App\Models\WorkType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    /**
     * 部門倉庫契約
     * @var DepartmentRepositoryContract
     */
    protected $repository;

    /**
     * DepartmentController constructor.
     */
    public function __construct(DepartmentRepositoryContract $repository)
    {
        $this->repository = $repository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('settings.departments.index', $this->repository->departmentResources());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartmentRequest $request)
    {
        return response()->save($this->repository->create($request));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DepartmentRequest $request, Department $department)
    {
        return response()->update($this->repository->update($request, $department));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        return response()->delete($department->delete());
    }
}
