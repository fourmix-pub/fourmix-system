<?php

namespace App\Tools\Analytics;

use App\Models\Project;
use App\User;

trait ProjectAnalyticsTools
{
    /**
     * 予算残高計算.
     * @param Project $project
     * @return int
     */
    public function balanceBudget(Project $project)
    {
        return (int)($project->budget - $project->sumByCost($project->id)->sum_cost);
    }

    /**
     * 予算残高パーセント計算.
     * @param Project $project
     * @return int
     */
    public function balanceBudgetRate(Project $project)
    {
        if ($project->budget !== 0) {
            return round((double)($this->balanceBudget($project) / $project->budget * 100), 2);
        } else {
            return 0;
        }
    }

    /**
     * 個人予算残高計算.
     * @param Project $project
     * @param User $user
     * @return int
     */
    public function balancePersonalBudget(Project $project, User $user)
    {
        return (int)($user->pivot->budget - $project->sumByCostPersonal($project->id, $user->id)->sum_cost);
    }


    public function balancePersonalBudgetRate(Project $project, User $user)
    {
        if ($user->pivot->budget !== 0) {
            return round((double)($this->balancePersonalBudget($project, $user) / $user->pivot->budget * 100), 2);
        } else {
            return 0;
        }
    }
}
