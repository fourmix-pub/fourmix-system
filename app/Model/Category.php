<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    /**
     * 削除日 更新
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * 作業日報　取得
     * 1対多
     *
     * @return  \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Dailies()
    {
        return $this->hasMany('App\Model\Daily', 'category_id', 'id');
    }
}
