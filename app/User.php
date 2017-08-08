<?php

namespace App;

use App\Models\Daily;
use App\Models\Department;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * 作業日報　取得
     * 1対多.
     *
     * @return  \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dailies()
    {
        return $this->hasMany(Daily::class, 'user_id', 'id');
    }

    /**
     * 部門 取得
     * 1対1.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function department()
    {
        return $this->hasOne(Department::class, 'id', 'department_id');
    }
}
