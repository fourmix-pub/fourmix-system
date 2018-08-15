<?php

namespace App\Contracts\Repositories;

interface SafetyMailRepositoryContract
{
    /**
     * 安否確認メール取得契約.
     * @return mixed
     */
    public function safetyMailResources();

    /**
     * 安否確認メール新規作成契約
     * @param $request
     * @return mixed
     */
    public function create($request);

    /**
     * 安否確認メール取得契約(ビュー用).
     * @param $id
     * @return mixed
     */
    public function safetyMailResourcesForShow($id);
}
