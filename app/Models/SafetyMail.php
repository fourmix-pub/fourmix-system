<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class SafetyMail extends Model
{
    /**
     * 作成者取得方法.
     * 1対1.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'safety_confirmations',
            'mail_id',
            'user_id')
            ->as('confirmations')
            ->withPivot('is_confirmed')
            ->withTimestamps();
    }

    /**
     * 安否確認済の割合を求める方法
     * @return int
     */
    public function confirmationRate(): int
    {
        $users = $this->users();
        $allCount = $users->count();

        if ($allCount > 0) {
            return (int)$users->wherePivot('is_confirmed', true)->count() / $allCount * 100;
        }

        return 0;
    }
}
