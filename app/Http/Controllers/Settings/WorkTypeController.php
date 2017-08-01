<?php

namespace App\Http\Controllers\Settings;

use App\Contracts\Repositories\WorkTypeRepositoryContract;
use App\Models\WorkType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\WorkTypeRepository;

class WorkTypeController extends Controller
{
    /**
     * @var WorkTypeRepositoryContract
     */
    protected $repository;

    /**
     * WorkTypeController constructor.
     */
    public function __construct(WorkTypeRepositoryContract $repository)
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
        return view('settings.work-types.index', $this->repository->workTypeResources());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($this->repository->workTypeStore($request)){
            return view('settings.work-types.index');
        }else{
            return view('settings.work-types.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WorkType $workType)
    {

        if($this->repository->workTypeUpdate($request, $workType)){
            return view('settings.work-types.index');
        }else{
            return view('settings.work-types.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkType $workType)
    {
        if($workType->delete()){
            return view('settings.work-types.index');
        }else{
            return view('settings.work-types.index');
        }
    }
}
