<?php

namespace App\Contracts\Repositories;

use App\User;

interface UserRepositoryContract
{
    /**
     * リソース取得契約.
     * @return mixed
     */
    public function userResources();

    /**
     * 更新契約.
     * @param $request
     * @param User $user
     * @return mixed
     */
    public function update($request, User $user);

    /**
     * プロフィール更新契約.
     * @param $request
     * @param User $user
     * @return mixed
     */
    public function updateProfile($request, User $user);

    /**
     * 新規作成契約.
     * @param $request
     * @return mixed
     */
    public function create($request);

    /**
     * 削除契約.
     * @param User $user
     * @return mixed
     */
    public function delete(User $user);
}
