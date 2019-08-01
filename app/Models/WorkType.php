<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class WorkType extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    /**
     * 日報 取得.
     * 1対多.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dailies()
    {
        return $this->hasMany(Daily::class, 'work_type_id', 'id');
    }
}
