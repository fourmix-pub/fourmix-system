<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    /**
     * 1対多.
     * 担当者 取得.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany(User::class, 'department_id', 'id');
    }
}
