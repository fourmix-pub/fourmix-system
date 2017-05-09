<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use SoftDeletes;

    /**
     * 削除日 更新
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * 担当者　取得
     * 1対多
     *
     * @return  \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Users()
    {
        return $this->hasMany('App\User', 'department_id', 'id');
    }

}
