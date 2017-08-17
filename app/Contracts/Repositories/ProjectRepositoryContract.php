<?php

namespace App\Contracts\Repositories;

use App\Models\Project;

interface ProjectRepositoryContract
{
    /**
     * プロジェクト資源取得契約.
     * @return mixed
     */
    public function projectResources();

    /**
     * プロジェクト更新契約.
     * @param $request
     * @param Project $project
     * @return mixed
     */
    public function update($request, Project $project);

    /**
     * プロジェクト新規作成契約.
     * @param $request
     * @return mixed
     */
    public function create($request);
}
