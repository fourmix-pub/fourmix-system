<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Daily extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    /**
     * �
     * 当�
     * 取得.
     * 1対1.
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    /**
     * プロジェクト取得.
     * 1対1.
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function project()
    {
        return $this->hasOne(Project::class, 'id', 'project_id');
    }

    /**
     * 作業分類取得.
     * 1対1.
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function workType()
    {
        return $this->hasOne(WorkType::class, 'id', 'work_type_id');
    }

    /**
     * 勤務分類取得.
     * 1対1.
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function jobType()
    {
        return $this->hasOne(JobType::class, 'id', 'job_type_id');
    }
}
