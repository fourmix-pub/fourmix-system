<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class Project extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    /**
     * 担当者取得.
     * 1対1.
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    /**
     * 多対多.
     * 担当者 取得.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'personal_budgets', 'project_id', 'user_id')
            ->withPivot('budget')
            ->withTimestamps();
    }

    /**
     * 1対多.
     * 個人予算 取得.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personalBudgets()
    {
        return $this->hasMany(PersonalBudget::class, 'project_id', 'id');
    }

    /**
     * 1対多.
     * 日報 取得.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dailies()
    {
        return $this->hasMany(Daily::class, 'project_id', 'id');
    }

    /**
     * 1対1.
     * 顧客 取得.
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function customer()
    {
        return $this->hasOne(Customer::class, 'id', 'customer_id');
    }

    public function sumByWorkType()
    {
        return $this->dailies()->select(DB::raw('work_type_id, sum(`time`) as `sum_time` , sum(`cost`) as `sum_cost`'))->groupBy('work_type_id');
    }
}
