<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class JobType extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    /**
     * 1対多.
     * 日報 取得.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dailies()
    {
        return $this->hasMany(Daily::class, 'job_type_id', 'id');
    }
}
