<?php

namespace Tests\Feature\Routes\SettingRouteTests;

use App\Models\PersonalBudget;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PersonalBudgetRouteTest extends TestCase
{
    /**
     * テストユーザー
     * @var
     */
    private $user;

    /**
     * テストプロジェクト.
     * @var
     */
    private $project;

    /**
     * テストデータ作成.
     * @before
     */
    public function create_test_data()
    {
        $this->user = factory(User::class)->create();
        $this->project = factory(PersonalBudget::class)->create();
    }

    /**
     * @test
     */
    public function it_can_access_view()
    {
        $response = $this->actingAs($this->user)->get('/projects/personal-budgets');
        $response->assertStatus(200);
        $response->assertViewHasAll(['projects', 'usersSelect', 'projectId', 'userId', 'projectsSelect']);
    }

    /**
     * 追加できる.
     * @test
     */
    public function it_can_add()
    {
        $data = [
            'project_id'   => 10,
            'user_id'    => 10,
            'budget' => 222222,
        ];
        $response = $this->actingAs($this->user)->post('/projects/personal-budgets', array_merge($data, ['_token' => csrf_token()]));
        $this->assertDatabaseHas('personal_budgets', $data);
        $response->assertStatus(302);
        $response->assertSessionHas('status');
    }

    /**
     *　追加できない.
     * @test
     */
    public function it_can_not_add()
    {
        $data = [
            'project_id'   => 10,
            'user_id'    => '',
            'budget' => 222222,
        ];
        $response = $this->actingAs($this->user)->post('/projects/personal-budgets', array_merge($data, ['_token' => csrf_token()]));
        $response->assertStatus(302);
        $response->assertSessionHasErrors('user_id');
    }

    /**
     * 編集できる.
     * @test
     */
    public function it_can_edit()
    {
        $data = [
            'project_id' => 2,
            'user_id' => 2,
            'budget' => 10000,
        ];

        $response = $this->actingAs($this->user)->patch('/projects/personal-budgets/update', array_merge($data, ['_token' => csrf_token()]));
        $this->assertDatabaseHas('personal_budgets', $data);
        $response->assertStatus(302);
        $response->assertSessionHas('status');
    }

    /**
     *　編集できない.
     * @test
     */
    public function it_can_not_edit()
    {
        $data = [
            'project_id' => 2,
            'user_id' => 2,
            'budget' => '',
        ];
        $response = $this->actingAs($this->user)->patch('/projects/personal-budgets/update', array_merge($data, ['_token' => csrf_token()]));
        $response->assertStatus(302);
        $response->assertSessionHasErrors('budget');
    }

    /**
     * 削除できる.
     * @test
     */
    public function it_can_delete()
    {
        $data = [
            'project_id' => 2,
            'user_id' => 2,
        ];
        $response = $this->actingAs($this->user)->delete('/projects/personal-budgets/delete', array_merge($data, ['_token' => csrf_token()]));
        $response->assertStatus(302);
        $this->assertDatabaseMissing('personal_budgets', $data);
    }

    /**
     * 担当者IDによって検索できる.
     * @test
     */
    public function it_can_search_by_user_id()
    {
        $data = [
            'user_id' => 1,
        ];

        $response = $this->actingAs($this->user)->get('/projects/personal-budgets', array_merge($data));
        $this->assertDatabaseHas('personal_budgets', $data);
        $response->assertViewHasAll(['projects', 'usersSelect', 'projectId', 'userId', 'projectsSelect']);
    }

    /**
     * プロジェクトIDによって検索できる.
     * @test
     */
    public function it_can_search_by_project_id()
    {
        $data = [
            'project_id' => 2,
        ];

        $response = $this->actingAs($this->user)->get('/projects/personal-budgets', array_merge($data));
        $this->assertDatabaseHas('personal_budgets', $data);
        $response->assertViewHasAll(['projects', 'usersSelect', 'projectId', 'userId', 'projectsSelect']);
    }

    /**
     * 個人予算別予算対 表示できる.
     * @test
     */
    public function it_can_access_view_personal_budget()
    {
        $response = $this->actingAs($this->user)->get('/projects/project-personal-budgets');
        $response->assertStatus(200);
        $response->assertViewHasAll(['projects', 'usersSelect', 'projectId', 'userId', 'projectsSelect']);
    }

    /**
     * 個人予算別予算対 担当者IDによって検索できる.
     * @test
     */
    public function it_can_search_personal_budget_by_user_id()
    {
        $data = [
            'user_id' => 1,
        ];

        $response = $this->actingAs($this->user)->get('/projects/project-personal-budgets', array_merge($data));
        $this->assertDatabaseHas('projects', $data);
        $response->assertViewHasAll(['projects', 'usersSelect', 'projectId', 'userId', 'projectsSelect']);
    }
}
