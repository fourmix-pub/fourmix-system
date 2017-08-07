<?php

namespace App\Repositories;


use App\Contracts\Repositories\UserRepositoryContract;
use App\User;

class UserRepository implements UserRepositoryContract
{

    /**
     * 担当者リソース取得契約.
     * @return mixed
     */
    public function userResources()
    {
        $users = User::latest()->paginate(10);

        return compact('users');
    }
}