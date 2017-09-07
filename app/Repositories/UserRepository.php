<?php

namespace App\Repositories;

use App\User;
use App\Models\Department;
use App\Contracts\Repositories\UserRepositoryContract;

class UserRepository implements UserRepositoryContract
{
    /**
     * 担当者リソース取得.
     * @return mixed
     */
    public function userResources()
    {
        $users = User::latest();

        if ($userId = request('user_id')) {
            $users = $users->where('id', $userId);
        }

        if ($departmentId = request('department_id')) {
            $users = $users->where('department_id', $departmentId);
        }

        $users = $users->paginate(10);

        $usersSelect = User::all();

        $departments = Department::all();

        return compact('users', 'usersSelect', 'departments', 'userId', 'departmentId');
    }

    /**
     * 担当者更新.
     * @param $request
     * @param User $user
     * @return mixed
     */
    public function update($request, User $user)
    {
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->department_id = $request->get('department_id');
        $user->cost = $request->get('cost');
        $user->start = $request->get('start');
        $user->end = $request->get('end');

        return $user->update();
    }

    /**
     * 担当者新規作成.
     * @param $request
     * @return mixed
     */
    public function create($request)
    {
        $user = new User();

        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = str_random(10);
        $user->department_id = $request->get('department_id');
        $user->cost = $request->get('cost');
        $user->start = $request->get('start');
        $user->end = $request->get('end');

        return $user->save();
    }

    /**
     * 担当者削除.
     * @param User $user
     * @return mixed
     */
    public function delete(User $user)
    {
        $user->is_resignation = 1;

        return $user->update();
    }

    /**
     * プロフィール更新.
     * @param $request
     * @param User $user
     * @return mixed
     */
    public function updateProfile($request, User $user)
    {
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->start = $request->get('start');
        $user->end = $request->get('end');

        return $user->update();
    }
}
