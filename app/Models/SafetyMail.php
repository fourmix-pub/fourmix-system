<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SafetyMail extends Model
{
    /**
     * 安否確認情報取得.
     * 1対多.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dailies()
    {
        return $this->hasMany(SafetyConfirmation::class, 'mail_id', 'id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
