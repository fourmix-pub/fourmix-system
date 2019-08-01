<?php

namespace App\Http\Controllers\Api\V1;

use App\Exceptions\PasswordErrorException;
use App\Http\Resources\V1\DailyResource;
use App\Http\Resources\V1\UserResource;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * ユーザーのプロフィールの取得
     * @param Request $request
     * @return UserResource
     */
    public function profile(Request $request)
    {
        return new UserResource($request->user());
    }

    /**
     * 全ユーザーの取得
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return UserResource::collection(User::with(['department'])->get());
    }

    /**
     * ユーザーの更新
     * @param Request $request
     * @return UserResource
     * @throws PasswordErrorException
     */
    public function update(Request $request)
    {
        $user = $request->user();

        $this->validate($request, [
            'name' => 'nullable|string|min:1|max:50',
            'old_password' => 'nullable',
            'password' => 'nullable|min:6|max:15|confirmed',
        ]);

        if ($request->input('name')) {
            $user->name = $request->input('name');
        }

        if ($request->input('password')) {
            if (Hash::check($request->input('old_password'), $user->password)) {
                $user->password = bcrypt($request->input('password'));
            } else {
                throw new PasswordErrorException();
            }
        }

        $user->update();

        return new UserResource($user);
    }

    public function myDailies(Request $request)
    {
        return DailyResource::collection($request->user()->dailies()->latest()->paginate(50));
    }
}
