<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Daily extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
