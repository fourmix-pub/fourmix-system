<?php

namespace App\Repositories;

use App\Contracts\Repositories\SafetyMailRepositoryContract;
use App\Models\SafetyMail;
use App\User;

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

    /**
     * 安否確認メール新規作成契約
     * @param $request
     * @return mixed
     */
    public function create($request)
    {
        $safetyMail = new SafetyMail();
        $safetyMail->contents = $request->contents;
        $safetyMail->title = $request->title;
        $safetyMail->user_id = $request->user()->id;
        $safetyMail->save();
        $safetyMail->users()->attach(User::notResignation()->get());
    }
}
