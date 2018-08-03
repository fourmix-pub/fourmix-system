<?php

namespace App\Repositories;


use App\Contracts\Repositories\SafetyMailRepositoryContract;
use App\Models\SafetyMail;

class SafetyMailRepository implements SafetyMailRepositoryContract
{
    /**
     * 安否確認情報取得契約.
     * @return mixed
     */
    public function safetyMailResources()
    {
        $safetyMails = SafetyMail::latest()->get();
        return compact('safetyMails');
    }
}