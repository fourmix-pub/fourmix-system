<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\DailyResource;
use App\Http\Resources\V1\UserResource;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
     * @param User $user
     * @return UserResource
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'sometimes|required|string|min:1|max:50',
            'email' => 'sometimes|required|email|min:1',
        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');

        $user->update();

        return new UserResource($user);
    }

    public function myDailies(Request $request)
    {
        return DailyResource::collection($request->user()->dailies()->latest('date')->latest('end')->paginate(50));
    }
}
