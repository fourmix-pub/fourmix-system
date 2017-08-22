<?php

namespace App;

use App\Models\Daily;
use App\Models\Project;
use App\Models\Department;
use App\Models\PersonalBudget;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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
        return $this->hasOne(Department::class, 'id', 'department_id');
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
}
