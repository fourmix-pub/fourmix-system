<?php

namespace App\Repositories;


use App\Contracts\Repositories\PersonalBudgetRepositoryContract;
use App\Models\PersonalBudget;
use App\Models\Project;
use App\User;

class PersonalBudgetRepository implements PersonalBudgetRepositoryContract
{
    /**
     * 個人予算資源取得.
     * @return mixed
     */
    public function personalBudgetResources()
    {
//        $personalBudgets = PersonalBudget::latest();
//
//        if($projectId = request('project_id')){
//            $personalBudgets = $personalBudgets->where('project_id', $projectId);
//        }
//
//        if($userId = request('user_id')){
//            $personalBudgets = $personalBudgets->where('user_id', $userId);
//        }
//
//        $personalBudgets = $personalBudgets->paginate(10);

        $projects = Project::all();
        $users = User::all();

        return compact('projects', 'users', 'projectId', 'userId');
    }

    /**
     * 個人予算更新.
     * @param $request
     * @param PersonalBudget $personalBudget
     * @return mixed
     */
    public function update($request, PersonalBudget $personalBudget)
    {
        $personalBudget->project_id = $request->project_id;
        $personalBudget->user_id = $request->user_id;
        $personalBudget->budget = $request->budget;

        return $personalBudget->update();
    }

    /**
     * 個人予算新規作成.
     * @param $request
     * @return mixed
     */
    public function create($request)
    {
        $personalBudget = new PersonalBudget();

        $personalBudget->project_id = $request->project_id;
        $personalBudget->user_id = $request->user_id;
        $personalBudget->budget = $request->budget;

        return $personalBudget->save();
    }
}