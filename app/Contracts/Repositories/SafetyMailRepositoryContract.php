<?php

namespace App\Contracts\Repositories;

use App\SafetyMail;

interface SafetyMailRepositoryContract
{
    /**
     * 安否確認情報取得契約.
     * @return mixed
     */
    public function safetyMailResources();
}