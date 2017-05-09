<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectUser extends Model
{
    use SoftDeletes;

    /**
     * 削除日 更新
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * プロジェクト 取得
     * 1対1
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Project()
    {
        return $this->hasOne('App\Model\Project', 'id', 'project_id');
    }

    /**
     * 担当者 取得
     * 1対1
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function User()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
