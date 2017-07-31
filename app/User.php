<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * 作業日報　取得
     * 1対多.
     *
     * @return  \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Dailies()
    {
        return $this->hasMany('App\Model\Daily', 'user_id', 'id');
    }

    /**
     * プロジェクト　取得
     * 1対多.
     *
     * @return  \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Projects()
    {
        return $this->hasMany('App\Model\Projects', 'project_id', 'id');
    }

    /**
     * 個人予算　取得
     * 1対多.
     *
     * @return  \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ProjectUsers()
    {
        return $this->hasMany('App\Model\ProjectUsers', 'user_id', 'id');
    }

    /**
     * 部門 取得
     * 1対1.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Department()
    {
        return $this->hasOne('App\Model\Department', 'id', 'department_id');
    }
}
