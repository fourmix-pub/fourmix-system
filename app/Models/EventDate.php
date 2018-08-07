<?php

namespace App\Models;


use App\User;
use Illuminate\Database\Eloquent\Model;

class EventDate extends Model
{
    /**
     * イベントデートからイベントを取得
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function event()
    {
        return $this->hasOne(Event::class, 'id', 'event_id');
    }

    /**
     * イベントデートとユーザーの関連付け
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'event_entries',
            'date_id',
            'user_id')
            ->withPivot('participation')
            ->as('eventEntry')
            ->using(EventEntry::class);
    }

    /**
     * エントリーしたユーザの出席状況マークを取得
     * @param $userId
     * @return string
     */
    public function entryUserMark($userId)
    {
        $user = $this->users->where('id', $userId)->first();

        if ($user) {
            return $user->eventEntry->entryMark();
        }

        return '未回答';
    }
}