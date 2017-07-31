<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     *プロジェクト 一覧　
     *
     * @return mixed
     */
    public function index()
    {
        return view('project.index');
    }

    /**
     *プロジェクト 個人予算　
     *
     * @return mixed
     */
    public function personalBudget()
    {
        return view('project.personal-budget');
    }

    /**
     *プロジェクト 台帳.
     *
     * @return mixed
     */
    public function ledger()
    {
        return view('project.ledger');
    }

    /**
     *プロジェクト 予算対実績表.
     *
     * @return mixed
     */
    public function projectBudget()
    {
        return view('project.project-budget');
    }
}
