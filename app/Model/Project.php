<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    /**
     * 削除日 更新.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * 作業日報　取得
     * 1対多.
     *
     * @return  \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Dailies()
    {
        return $this->hasMany('App\Model\Daily', 'project_id', 'id');
    }

    /**
     * 個人予算　取得
     * 1対多.
     *
     * @return  \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ProjectUsers()
    {
        return $this->hasMany('App\Model\ProjectUsers', 'project_id', 'id');
    }

    /**
     * 担当者 取得
     * 1対1.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function User()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
