<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function users()
    {
        return $this->hasMany('App\Users','id','user_id');
    }
}
