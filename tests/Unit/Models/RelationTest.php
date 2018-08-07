<?php

namespace Tests\Unit\Models;

use App\User;
use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;
use App\Models\Daily;
use App\Models\JobType;
use App\Models\Project;
use App\Models\Customer;
use App\Models\WorkType;
use App\Models\Department;
use App\Models\PersonalBudget;
use Event;

class RelationTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
        Event::fake();
    }

    /**
     * 担当者ID から 日報取得.
     * @test
     */
    public function user_has_many_dailies()
    {
        foreach (User::find(1)->dailies as $daily) {
            $this->assertRelation($daily, Daily::class);
        }
    }

    /**
     * 担当者ID から 部門取得.
     * @test
     */
    public function user_has_one_department()
    {
        $this->assertRelation(User::find(1)->department, Department::class);
    }

    /**
     * 担当者ID から 個人予算取得.
     * @test
     */
    public function user_has_many_personal_budgets()
    {
        foreach (User::find(1)->personalBudgets as $budget) {
            $this->assertRelation($budget, PersonalBudget::class);
        }
    }

    /**
     * 担当者ID(責任者) から プロジェクト取得.
     * @test
     */
    public function manager_has_many_projects()
    {
        foreach (User::find(1)->projectsFromManager as $project) {
            $this->assertRelation($project, Project::class);
        }
    }

    /**
     * 担当者ID から プロジェクト取得.
     * @test
     */
    public function user_has_many_projects()
    {
        foreach (User::find(1)->projects as $project) {
            $this->assertRelation($project, Project::class);
        }
    }

    /**
     * プロジェクトID から 担当者(責任者)取得.
     * @test
     */
    public function project_has_one_user()
    {
        $this->assertRelation(Project::find(1)->user, User::class);
    }

    /**
     * プロジェクトID から 担当者取得.
     * @test
     */
    public function project_has_many_users()
    {
        foreach (Project::find(1)->users as $user) {
            $this->assertRelation($user, User::class);
        }
    }

    /**
     * プロジェクトID から 個人予算取得.
     * @test
     */
    public function project_has_many_personal_budgets()
    {
        foreach (Project::find(1)->personalBudgets as $personalBudget) {
            $this->assertRelation($personalBudget, PersonalBudget::class);
        }
    }

    /**
     * プロジェクトID から 日報取得.
     * @test
     */
    public function project_has_many_dailies()
    {
        foreach (Project::find(1)->dailies as $daily) {
            $this->assertRelation($daily, Daily::class);
        }
    }

    /**
     * プロジェクトID から 顧客取得.
     * @test
     */
    public function project_has_one_customer()
    {
        $this->assertRelation(Project::find(1)->customer, Customer::class);
    }

    /**
     * 顧客ID から プロジェクト取得.
     * @test
     */
    public function customer_has_many_projects()
    {
        foreach (Customer::find(1)->projects as $project) {
            $this->assertRelation($project, Project::class);
        }
    }

    /**
     * 日報ID から 担当者取得.
     * @test
     */
    public function daily_has_one_user()
    {
        $this->assertRelation(Daily::find(1)->user, User::class);
    }

    /**
     * 日報ID から 勤務分類取得.
     * @test
     */
    public function daily_has_one_job_type()
    {
        $this->assertRelation(Daily::find(1)->jobType, JobType::class);
    }

    /**
     * 日報ID から 作業分類取得.
     * @test
     */
    public function daily_has_one_work_type()
    {
        $this->assertRelation(Daily::find(1)->workType, WorkType::class);
    }

    /**
     * 日報ID から プロジェクト取得.
     * @test
     */
    public function daily_has_one_project()
    {
        $this->assertRelation(Daily::find(1)->project, Project::class);
    }

    /**
     * 勤務分類ID から 日報取得.
     * @test
     */
    public function job_type_has_many_dailies()
    {
        foreach (JobType::find(1)->dailies as $daily) {
            $this->assertRelation($daily, Daily::class);
        }
    }

    /**
     * 作業分類ID から 日報取得.
     * @test
     */
    public function work_type_has_many_dailies()
    {
        foreach (WorkType::find(1)->dailies as $daily) {
            $this->assertRelation($daily, Daily::class);
        }
    }

    /**
     * 部門ID から 担当者取得.
     * @test
     */
    public function department_has_many_users()
    {
        $this->assertRelation(Department::find(1)->users, Collection::class);
    }

    /**
     * 個人予算のID から 担当者取得.
     * @test
     */
    public function personal_budget_has_one_user()
    {
        $this->assertRelation(PersonalBudget::where('project_id', 1)
            ->where('user_id', 1)->first()->user, User::class);
    }

    /**
     * 個人予算のID から プロジェクト取得.
     * @test
     */
    public function personal_budget_has_one_project()
    {
        $this->assertRelation(PersonalBudget::where('project_id', 1)
            ->where('user_id', 1)->first()->project, Project::class);
    }

    /**
     * 安否確認メールID から ユーザ取得
     * @test
     */
    public function safety_mail_belongs_to_user()
    {
        $user = factory(User::class)->create();
        $safetyMail = factory(\App\Models\SafetyMail::class)->create();
        factory(\App\Models\SafetyConfirmation::class)->create([
            'mail_id' => $safetyMail->id,
            'user_id' => $user->id,
        ]);

        $this->assertTrue($safetyMail->users->first() instanceof User);
        $this->assertEquals($safetyMail->users->first()->id, $user->id);
    }
}
