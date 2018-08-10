<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * @property  user_id
 */
class SafetyConfirmation extends Model
{
    /**
     * 回答者取得.
     * 1対1.
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
