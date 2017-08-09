<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
        return $this->hasOne(User::class, 'id','user_id');
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
     * 多対多.
     * 顧客 取得.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function customers()
    {
        return $this->hasMany(Customer::class, 'project_id', 'id');
    }
}
