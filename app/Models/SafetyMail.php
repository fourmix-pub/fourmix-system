<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class SafetyMail extends Model
{
    /**
     * 安否情報取得.
     * 1対多.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function safetyConfirmations()
    {
        return $this->hasMany(SafetyConfirmation::class, 'mail_id', 'id');
    }

    /**
     * 作成者取得.
     * 1対1.
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    /**
     * 安否確認済の割合を求める
     * @param User $user
     */
    public function confirmationRateRatio(User $user)
    {
        $userNum = $user::table('users')->count();
        $confirmationNum = $this->Confirmations()->count();
        $ratio = $confirmationNum / $userNum * 100;
    }
}
