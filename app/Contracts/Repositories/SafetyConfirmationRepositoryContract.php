<?php

namespace App\Contracts\Repositories;

interface SafetyConfirmationRepositoryContract
{
    /**
     * 安否確認情報取得契約.
     * @return mixed
     */
    public function safetyConfirmationResources();
}