<?php

namespace App\Models;

use App\User;
use Carbon\Carbon;

class Daily extends Model
{
    protected $dates = ['deleted_at', 'date'];

    /**
     * 担当者 取得.
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
        return $this->hasOne(Project::class, 'id', 'project_id')->withTrashed();
    }

    /**
     * 作業分類取得.
     * 1対1.
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function workType()
    {
        return $this->hasOne(WorkType::class, 'id', 'work_type_id')->withTrashed();
    }

    /**
     * 勤務分類取得.
     * 1対1.
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function jobType()
    {
        return $this->hasOne(JobType::class, 'id', 'job_type_id')->withTrashed();
    }

    public function start()
    {
        return Carbon::createFromFormat('H:i:s', $this->start);
    }

    /**
     * フィルター
     * @param $query
     */
    public function scopeFilter($query)
    {
        $filter = collect(request()->input('filter', []));

        // 担当者ID
        $query->when($filter->get('user_id'), function ($query, $value) {
            $query->where('user_id', $value);
        });

        // プロジェクトID
        $query->when($filter->get('project_id'), function ($query, $value) {
            $query->where('project_id', $value);
        });

        // 作業分類ID
        $query->when($filter->get('work_type_id'), function ($query, $value) {
            $query->where('work_type_id', $value);
        });

        // 開始日
        $query->when($filter->get('started_time'), function ($query, $value) {
            $query->where('started_time', '>=', $value);
        });

        // 終了日
        $query->when($filter->get('ended_time'), function ($query, $value) {
            $query->where('ended_time', '<=', $value);
        });

    }

    /**
     * 担当者別集計表のフィルター
     * @param $query
     */
    public function scopeUserFilter($query)
    {
        $filter = collect(request()->input('filter', []));

        // 担当者ID
        $query->when($filter->get('user_id'), function ($query, $value) {
            $query->where('user_id', $value);
        });
    }

    /**
     * プロジェクト別集計表のフィルター
     * @param $query
     */
    public function scopeProjectFilter($query)
    {
        $filter = collect(request()->input('filter', []));

        // プロジェクトID
        $query->when($filter->get('project_id'), function ($query, $value) {
            $query->where('project_id', $value);
        });
    }
}
