<?php

namespace App\Contracts\Repositories;


use App\User;

interface UserRepositoryContract
{
    /**
     * 担当者リソース取得契約.
     * @return mixed
     */
    public function userResources();

    /**
     * 担当者更新契約.
     * @param $request
     * @param User $user
     * @return mixed
     */
    public function update($request, User $user);

    /**
     * 担当者新規作成契約.
     * @param $request
     * @return mixed
     */
    public function create($request);

    /**
     * 担当者削除契約
     * @param User $user
     * @return mixed
     */
    public function delete(User $user);
}