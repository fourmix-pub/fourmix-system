<?php

namespace App\Http\Controllers\Auth;

use App\Tools\Authenticates\LoginToken;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SetPasswordController extends Controller
{
    /**
     * パスワード設定フォーム
     * @param LoginToken $token
     * @return $this
     */
    public function showSetForm(LoginToken $token)
    {
        return view('auth.passwords.set')->with([
            'token' => $token->token,
            'email' => $token->user->email,
        ]);
    }

    /**
     * パスワード設定
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function setPassword(Request $request)
    {
        $this->validate($request, $this->rules());

        $token = LoginToken::findByToken($request->token);

        $user = $token->user;

        if ($user->email == $request->email) {
            $user->password = bcrypt($request->password);
            $user->save();
            auth()->login($user);
            $token->delete();
            return redirect()->to(route('dailies.index'));
        } else {
            return redirect()->back()->withErrors('設定できません。管理者まで連略してください。');
        }
    }

    /**
     * パスワード設定入力チェック
     *
     * @return array
     */
    protected function rules()
    {
        return [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ];
    }
}
