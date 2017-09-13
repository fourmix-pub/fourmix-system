<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class Project extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at', 'start', 'end', 'end_expect'];

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
        return $this->hasOne(Customer::class, 'id', 'customer_id')->withTrashed();
    }

    /**
     * プロジェクト毎の予算合計、作業分類別に取得
     * @return mixed
     */
    public function sumByWorkType()
    {
        return $this->dailies()->select(DB::raw('work_type_id, sum(`time`) as `sum_time` , sum(`cost`) as `sum_cost`'))
            ->groupBy('work_type_id');
    }

    /**
     * プロジェクト毎の予算合計、担当者別に取得
     * @return mixed
     */
    public function sumByUser()
    {
        return $this->dailies()->select(DB::raw('user_id, sum(`time`) as `sum_time` , sum(`cost`) as `sum_cost`'))
            ->groupBy('user_id');
    }

    /**
     * 個人予算、プロジェクトとユーザー毎に合計取得
     * @param $projectId
     * @param $userId
     * @return mixed
     */
    public function sumByCostPersonal($projectId, $userId)
    {
        return DB::table('dailies')->select(DB::raw('sum(`cost`) as `sum_cost`'))
            ->where('project_id', $projectId)
            ->where('user_id', $userId)
            ->first();
    }

    /**
     * ユーザーIDからユーザー情報取得.
     * @param $userId
     * @return \Illuminate\Database\Eloquent\Collection|mixed
     */
    public function budgetFilter($userId = null)
    {
        if ($userId) {
            return $this->users()->where('user_id', $userId)->get();
        } else {
            return $this->users;
        }
    }

    /**
     * プロジェクト実績金額 取得.
     * @param $projectId
     * @return mixed
     */
    public function sumByCost($projectId)
    {
        return DB::table('dailies')->select(DB::raw('sum(`cost`) as `sum_cost`'))->where('project_id', '=', $projectId)->first();
    }
}
