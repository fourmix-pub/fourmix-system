<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Event extends Model
{
    /**
     * 作成者取得
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    /**
     * イベント日時取得
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventDates()
    {
        return $this->hasMany(EventDate::class, 'event_id', 'id');
    }
}
