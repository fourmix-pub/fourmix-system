<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Daily extends Model
{
    use SoftDeletes;

    /**
     * 削除日 更新
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * 作業分類 取得
     * 1対1
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Category()
    {
        return $this->hasOne('App\Model\Category', 'id', 'category_id');
    }

    /**
     * 勤務分類 取得
     * 1対1
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Work()
    {
        return $this->hasOne('App\Model\Work', 'id', 'work_id');
    }

    /**
     * 担当者 取得
     * 1対1
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function User()
    {
        return $this->hasOne('App\Model\User', 'id', 'user_id');
    }

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
}
