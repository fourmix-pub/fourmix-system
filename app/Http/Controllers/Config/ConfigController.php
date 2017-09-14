<?php

namespace App\Http\Controllers\Config;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;

class ConfigController extends Controller
{
    protected $nav = 'users';

    /**
     * パスワード変更.
     *
     * @return mixed
     */
    public function editPassword()
    {
        return view('config.password')->with('nav', $this->nav)->with('mode', 'password');
    }

    /**
     * パスワード変更.
     *
     * @param Request $request
     * @return mixed
     */
    public function resetPassword(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'required|min:6|max:15|confirmed',
        ]);
        $user = $request->user();
        if (Hash::check($request->get('old_password'), $user->password)) {
            $user->password = bcrypt($request->get('password'));
            return response()->update($user->update());
        } else {
            return redirect()->back()->withErrors(trans('auth.failed'));
        }
    }
}
