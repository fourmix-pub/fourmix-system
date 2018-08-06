<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventDate extends Model
{
    public function event()
    {
        return $this->hasOne(Event::class, 'id', 'event_id');
    }
}