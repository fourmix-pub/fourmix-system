<?php

namespace App\Repositories;


use App\Contracts\Repositories\ProjectRepositoryContract;
use App\Models\Project;
use Illuminate\Foundation\Auth\User;
use PhpParser\ParserTest;

class ProjectRepository implements ProjectRepositoryContract
{
    /**
     * プロジェクト資源取得.
     * @return mixed
     */
    public function projectResources()
    {
        $projects = Project::latest();

        if($projectId = request('project_id')){
            $projects = $projects->where('id', $projectId);
        }

        if($userId = request('user_id')){
            $projects = $projects->where('user_id', $userId);
        }

        if ($startDate = request('start_date')) {
            $projects = $projects->where('start', '>=', $startDate);
        }

        if ($endDate = request('end_date')) {
            $projects = $projects->where('end', '<=', $endDate);
        }

        $projects = $projects->paginate(10);

        $projectsSelect = Project::all();
        $users = User::all();

        return compact('projects','projectsSelect', 'projectId', 'users', 'userId', 'startDate', 'endDate');
    }

    /**
     * プロジェクト更新.
     * @param $request
     * @param Project $project
     * @return mixed
     */
    public function update($request, Project $project)
    {
        $project->name = $request->get('name');
        $project->user_id = $request->get('user_id');
        $project->cost = $request->get('cost');
        $project->budget = $request->get('budget');
        $project->start = $request->get('start');
        $project->end_expect = $request->get('end_expect');
        $project->end = $request->get('end');
        $project->note = $request->get('note');

        return $project->update();
    }
}