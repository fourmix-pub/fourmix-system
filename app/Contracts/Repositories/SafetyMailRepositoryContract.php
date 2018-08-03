<?php

namespace App\Contracts\Repositories;

interface SafetyMailRepositoryContract
{
    /**
     * 安否確認メール取得契約.
     * @return mixed
     */
    public function safetyMailResources();
}