<?php

namespace App\Repositories;


use App\Contracts\Repositories\PersonalBudgetRepositoryContract;
use App\Models\PersonalBudget;
use App\Models\Project;
use App\User;
use Illuminate\Database\QueryException;
use Log;

class PersonalBudgetRepository implements PersonalBudgetRepositoryContract
{
    /**
     * 個人予算資源取得.
     * @return mixed
     */
    public function personalBudgetResources()
    {

        $projects = Project::latest();

        if($projectId = request('project_id')){
            $projects = $projects->where('id', $projectId);
        }

        $userId = request('user_id');

        $projects = $projects->paginate(3);
        $projectsSelect = Project::all();
        $usersSelect = User::all();

        return compact('projects', 'usersSelect', 'projectId', 'userId', 'projectsSelect');
    }

    /**
     * 個人予算更新.
     * @param $request
     * @return mixed
     */
    public function update($request)
    {
        $project = Project::find($request->get('project_id'));

        $budget = $project->users()->find($request->get('user_id'));
        $budget->pivot->budget = $request->get('budget');

        return $budget->pivot->update();
    }

    /**
     * 個人予算新規作成.
     * @param $request
     * @return mixed
     */
    public function create($request)
    {
        $project = Project::find($request->get('project_id'));

        try {
            $project->users()->attach($request->user_id, ['budget' => $request->budget]);

            return true;
        } catch (\Exception $exception) {
            if($exception instanceof QueryException){
                return false;
            }else{
                Log::debug($exception->getMessage());
                return false;
            }
        }
    }
}