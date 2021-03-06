<?php

namespace App;

use App\Events\ModelEvents\UserCreated;
use App\Models\Daily;
use App\Models\Project;
use App\Models\Department;
use App\Models\PersonalBudget;
use App\Notifications\ResetPasswordNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'department_id', 'cost', 'start', 'end', 'is_resignation'
    ];

    protected $hidden = [
        'password', 'id', 'remember_token'
    ];

    /**
     * タイミングイベント定義。
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'created' => UserCreated::class,
    ];

    /**
     * 作業日報 取得.
     * 1対多.
     * @return  \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dailies()
    {
        return $this->hasMany(Daily::class, 'user_id', 'id');
    }

    /**
     * 部門 取得.
     * 1対1.
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function department()
    {
        return $this->hasOne(Department::class, 'id', 'department_id')->withTrashed();
    }

    /**
     * 個人予算 取得.
     * 1対多.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personalBudgets()
    {
        return $this->hasMany(PersonalBudget::class, 'user_id', 'id');
    }

    /**
     * プロジェクト(責任者) 取得.
     * 1対多.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projectsFromManager()
    {
        return $this->hasMany(Project::class, 'user_id', 'id');
    }

    /**
     * プロジェクト 取得.
     * 多対多.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function projects()
    {
        return $this->belongsToMany(Project::class, 'personal_budgets', 'user_id', 'project_id')
            ->withPivot('budget')
            ->withTimestamps();
    }

    /**
     * 担当者毎の予算合計、作業分類別に取得
     * @return mixed
     */
    public function sumByWorkType()
    {
        return $this->dailies()->select(DB::raw('work_type_id, sum(`time`) as `sum_time` , sum(`cost`) as `sum_cost`'))
            ->groupBy('work_type_id');
    }

    /**
     * 担当者毎の予算合計、プロジェクト別に取得
     * @return mixed
     */
    public function sumByProject()
    {
        return $this->dailies()->select(DB::raw('project_id, sum(`time`) as `sum_time` , sum(`cost`) as `sum_cost`'))
            ->groupBy('project_id');
    }


    /**
     * パスワード再設定用メール
     * @param string $token
     * @override
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    /**
     * カラム配列で取得
     * @return array
     */
    public function attributes()
    {
        return $this->attributesToArray();
    }

    /**
     * モデルデータをリフレッシュする
     * @param array $with
     * @return mixed
     */
    public function reload($with = [])
    {
        return static::whereId($this->id)->with($with)->first();
    }
}
