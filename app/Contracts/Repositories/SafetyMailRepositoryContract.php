<?php

namespace App\Contracts\Repositories;

use App\Models\SafetyMail;

interface SafetyMailRepositoryContract
{
    /**
     * 安否確認メール取得契約.
     * @return mixed
     */
    public function safetyMailResources(): array;

    /**
     * 安否確認メール新規作成契約
     * @param $request
     * @return mixed
     */
    public function create($request);

    /**
     * 安否確認メール取得契約(ビュー用).
     * @param SafetyMail $safetyMail
     * @return mixed
     */
    public function safetyMailResourcesForShow(SafetyMail $safetyMail): array;
}
