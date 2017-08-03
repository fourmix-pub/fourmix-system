<?php

namespace App\Repositories;

use App\Models\JobType;
use App\Contracts\Repositories\JobTypeRepositoryContract;

class JobTypeRepository implements JobTypeRepositoryContract
{
    /**
     * リソース取得.
     * @return mixed
     */
    public function jobTypeResources()
    {
        $jobTypes = JobType::latest()->paginate(10);

        return compact('jobTypes');
    }

    /**
     * 新規作成.
     * @return mixed
     */
    public function create($request)
    {
        $jobType = new JobType();
        $jobType->name = $request->get('name');
        $jobType->unit_betting_rate = $request->get('unit_betting_rate');

        return $jobType->save();
    }

    /**
     * 更新.
     * @return mixed
     */
    public function update($request, JobType $jobType)
    {
        $jobType->name = $request->get('name');
        $jobType->unit_betting_rate = $request->get('unit_betting_rate');

        return $jobType->update();
    }
}
