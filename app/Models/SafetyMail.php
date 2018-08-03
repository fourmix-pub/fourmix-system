<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SafetyMail extends Model
{
    protected function safetyConfirmation()
    {
        return $this->hasMany(SafetyConfirmation::class);
    }
}
