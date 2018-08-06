<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Event extends Model
{
    /**
     * @return mixed
     * 作成者取得
     */
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}