<?php

namespace App\Repositories;

use App\User;
use App\Models\Department;
use App\Contracts\Repositories\UserRepositoryContract;

class UserRepository implements UserRepositoryContract
{
    /**
     * ζ
     * ε½θ
     * γͺγ½γΌγΉεεΎ.
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
     * ζ
     * ε½θ
     * ζ΄ζ°.
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
     * ζ
     * ε½θ
     * ζ°θ¦δ½ζ.
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
     * ζ
     * ε½θ
     * ει€ε₯η΄.
     * @param User $user
     * @return mixed
     */
    public function delete(User $user)
    {
        $user->is_resignation = 1;

        return $user->update();
    }

    /**
     * γγ­γγ£γΌγ«ζ΄ζ°.
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
