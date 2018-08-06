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
    public function Confirmations()
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
     * 安否確認の割合を求める
     * @param User $user
     * @return int
     */
    public function confirmationRateRatio(User $user)
    {
        $users = $user::table('users')->count();
        $confirmation = $this->Confirmations()->count();
        $ratio = $confirmation / $users * 100;
    }
}
