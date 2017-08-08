<?php

namespace App\Http\Controllers\Settings;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Settings\UserRequest;
use App\Contracts\Repositories\UserRepositoryContract;

class UserController extends Controller
{
    protected $repository;

    /**
     * 担当者倉庫契約（インターフェース）
     * UserController constructor.
     */
    public function __construct(UserRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('settings.users.index', $this->repository->userResources());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        return response()->save($this->repository->create($request));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = Auth::user();

        return view('settings.profile.index', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        return response()->update($this->repository->update($request, $user));
    }

    public function updateProfile(Request $request, User $user)
    {
        return response()->update($this->repository->updateProfile($request, $user));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        return response()->delete($this->repository->delete($user));
    }
}
