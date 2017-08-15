<?php

namespace Tests\Unit\Models;

use App\User;
use Tests\TestCase;
use App\Models\Daily;
use App\Models\JobType;
use App\Models\Project;
use App\Models\Customer;
use App\Models\WorkType;
use App\Models\Department;
use App\Models\PersonalBudget;

class RelationTest extends TestCase
{
    /**
     * æ
     * å½è
     * ID ãã æ¥å ±åå¾.
     * @test
     */
    public function user_has_many_dailies()
    {
        foreach (User::find(1)->dailies as $daily) {
            $this->assertRelation($daily, Daily::class);
        }
    }

    /**
     * æ
     * å½è
     * ID ãã é¨éåå¾.
     * @test
     */
    public function user_has_one_department()
    {
        $this->assertRelation(User::find(1)->department, Department::class);
    }

    /**
     * æ
     * å½è
     * ID ãã åäººäºç®åå¾.
     * @test
     */
    public function user_has_many_personal_budgets()
    {
        foreach (User::find(1)->personalBudgets as $budget) {
            $this->assertRelation($budget, PersonalBudget::class);
        }
    }

    /**
     * æ
     * å½è
     * ID(è²¬ä»»è
     * ) ãã ãã­ã¸ã§ã¯ãåå¾.
     * @test
     */
    public function manager_has_many_projects()
    {
        foreach (User::find(1)->projectsFromManager as $project) {
            $this->assertRelation($project, Project::class);
        }
    }

    /**
     * æ
     * å½è
     * ID ãã ãã­ã¸ã§ã¯ãåå¾.
     * @test
     */
    public function user_has_many_projects()
    {
        foreach (User::find(1)->projects as $project) {
            $this->assertRelation($project, Project::class);
        }
    }

    /**
     * ãã­ã¸ã§ã¯ãID ãã æ
     * å½è
     * (è²¬ä»»è
     * )åå¾.
     * @test
     */
    public function project_has_one_user()
    {
        $this->assertRelation(Project::find(1)->user, User::class);
    }

    /**
     * ãã­ã¸ã§ã¯ãID ãã æ
     * å½è
     * åå¾.
     * @test
     */
    public function project_has_many_users()
    {
        foreach (Project::find(1)->users as $user) {
            $this->assertRelation($user, User::class);
        }
    }

    /**
     * ãã­ã¸ã§ã¯ãID ãã åäººäºç®åå¾.
     * @test
     */
    public function project_has_many_personal_budgets()
    {
        foreach (Project::find(1)->personalBudgets as $personalBudget) {
            $this->assertRelation($personalBudget, PersonalBudget::class);
        }
    }

    /**
     * ãã­ã¸ã§ã¯ãID ãã æ¥å ±åå¾.
     * @test
     */
    public function project_has_many_dailies()
    {
        foreach (Project::find(1)->dailies as $daily) {
            $this->assertRelation($daily, Daily::class);
        }
    }

    /**
     * ãã­ã¸ã§ã¯ãID ãã é¡§å®¢åå¾.
     * @test
     */
    public function project_has_one_customer()
    {
        $this->assertRelation(Project::find(1)->customer, Customer::class);
    }

    /**
     * é¡§å®¢ID ãã ãã­ã¸ã§ã¯ãåå¾.
     * @test
     */
    public function customer_has_many_projects()
    {
        foreach (Customer::find(1)->projects as $project) {
            $this->assertRelation($project, Project::class);
        }
    }

    /**
     * æ¥å ±ID ãã æ
     * å½è
     * åå¾.
     * @test
     */
    public function daily_has_one_user()
    {
        $this->assertRelation(Daily::find(1)->user, User::class);
    }

    /**
     * æ¥å ±ID ãã å¤ååé¡åå¾.
     * @test
     */
    public function daily_has_one_job_type()
    {
        $this->assertRelation(Daily::find(1)->jobType, JobType::class);
    }

    /**
     * æ¥å ±ID ãã ä½æ¥­åé¡åå¾.
     * @test
     */
    public function daily_has_one_work_type()
    {
        $this->assertRelation(Daily::find(1)->workType, WorkType::class);
    }

    /**
     * æ¥å ±ID ãã ãã­ã¸ã§ã¯ãåå¾.
     * @test
     */
    public function daily_has_one_project()
    {
        $this->assertRelation(Daily::find(1)->project, Project::class);
    }

    /**
     * å¤ååé¡ID ãã æ¥å ±åå¾.
     * @test
     */
    public function job_type_has_many_dailies()
    {
        foreach (JobType::find(1)->dailies as $daily) {
            $this->assertRelation($daily, Daily::class);
        }
    }

    /**
     * ä½æ¥­åé¡ID ãã æ¥å ±åå¾.
     * @test
     */
    public function work_type_has_many_dailies()
    {
        foreach (WorkType::find(1)->dailies as $daily) {
            $this->assertRelation($daily, Daily::class);
        }
    }

    /**
     * é¨éID ãã æ
     * å½è
     * åå¾.
     * @test
     */
    public function department_has_many_users()
    {
        foreach (Department::find(1)->users as $user) {
            $this->assertRelation($user, User::class);
        }
    }

    /**
     * åäººäºç®ã®ID ãã æ
     * å½è
     * åå¾.
     * @test
     */
    public function personal_budget_has_one_user()
    {
        $this->assertRelation(PersonalBudget::where('project_id', 1)->where('user_id', 1)->first()->user, User::class);
    }

    /**
     * åäººäºç®ã®ID ãã ãã­ã¸ã§ã¯ãåå¾.
     * @test
     */
    public function personal_budget_has_one_project()
    {
        $this->assertRelation(PersonalBudget::where('project_id', 1)->where('user_id', 1)->first()->project, Project::class);
    }
}
