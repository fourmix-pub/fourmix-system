<?php

namespace App\Repositories;


use App\Contracts\Repositories\SafetyMailRepositoryContract;
use App\Models\SafetyMail;

class SafetyMailRepository implements SafetyMailRepositoryContract
{
    /**
     * 安否確認メール取得契約.
     * @return mixed
     */
    public function safetyMailResources()
    {
        $safetyMails = SafetyMail::latest()->paginate(5);
        return compact('safetyMails');
    }
}