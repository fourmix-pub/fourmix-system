<?php

namespace App\Http\Controllers\SafetyMails;

use App\Models\SafetyConfirmation;
use Illuminate\Contracts\Encryption\DecryptException;
use App\Http\Controllers\Controller;

class ConfirmationUpdateController extends Controller
{
    /**
     * 安否確認情報を更新する方法
     * @param $token
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update($token)
    {
        $data = explode('/', decrypt($token));
        $mailId = $data[0];
        $userId = $data[1];

        try {
            $safetyConfirmation = SafetyConfirmation::where('mail_id', $mailId)->where('user_id', $userId)
                ->first();
        } catch (DecryptException $exception) {
            info('Decrypt failed.', ['ip' => request()->getClientIp(), 'messages' => $exception->getMessage()]);
            abort(404);
        }

        if (empty($safetyConfirmation)) {
            abort(404);
        }

        $safetyConfirmation->is_confirmed = true;
        $safetyConfirmation->update();

        return view ('safety-mail.confirmed');
    }
}
