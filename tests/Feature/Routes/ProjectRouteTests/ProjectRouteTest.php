<?php

namespace Tests\Feature\Routes\ProjectRouteTests;

use App\Models\Project;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProjectRouteTest extends TestCase
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
        $this->project = factory(Project::class)->create();
    }

    /**
     * @test
     */
    public function it_can_access_view()
    {
        $response = $this->actingAs($this->user)->get('/projects');
        $response->assertStatus(200);
        $response->assertViewHasAll(['projects', 'projectsSelect', 'projectId', 'users', 'userId', 'startDate', 'endDate', 'customers', 'customerId', 'status']);
    }

    /**
     * 追加できる.
     * @test
     */
    public function it_can_add()
    {
        $data = [
            'name'=> 'テストプロジェクト１',
            'customer_id' => 5,
            'cost' => 3000000,
            'budget' => 2000004,
            'user_id' => 12,
            'start' => '2017-10-11',
            'end' => '2017-11-15',
            'end_expect' => '2017-12-08',
            'note' => 'テストテスト',
        ];

        $response = $this->actingAs($this->user)->post('/projects', array_merge($data, ['_token' => csrf_token()]));
        $this->assertDatabaseHas('projects', $data);
        $response->assertStatus(302);
        $response->assertSessionHas('status');
    }

    /**
     * 編集できる.
     * @test
     */
    public function it_can_edit()
    {
        $data = [
            'name'=> 'テストテスト',
            'customer_id' => 5,
            'cost' => 3000000,
            'budget' => 2000004,
            'user_id' => 12,
            'start' => '2017-10-11',
            'end' => '2017-11-15',
            'end_expect' => '2017-12-08',
            'note' => 'テストテスト',
        ];

        $response = $this->actingAs($this->user)->patch('/projects/'.$this->project->id, array_merge($data, ['_token' => csrf_token()]));
        $this->assertDatabaseHas('projects', $data);
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
            'name'=> 'テストテスト',
            'customer_id' => 5,
            'cost' => 3000000,
            'budget' => 2000004,
            'user_id' => '',
            'start' => '2017-10-11',
            'end' => '2017-11-15',
            'end_expect' => '2017-12-08',
            'note' => 'テストテスト',
        ];
        $response = $this->actingAs($this->user)->patch('/projects/'.$this->project->id, array_merge($data, ['_token' => csrf_token()]));
        $response->assertStatus(302);
        $response->assertSessionHasErrors('user_id');
    }

    /**
     * 削除できる.
     * @test
     */
    public function it_can_delete()
    {
        $response = $this->actingAs($this->user)->delete('/projects/'.$this->project->id, ['_token' => csrf_token()]);
        $response->assertStatus(302);
        $this->assertSoftDeleted('projects', $this->project->toArray());
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

        $response = $this->actingAs($this->user)->get('/projects', array_merge($data));
        $this->assertDatabaseHas('projects', $data);
        $response->assertViewHasAll(['projects', 'projectsSelect', 'projectId', 'users', 'userId', 'startDate', 'endDate', 'customers', 'customerId', 'status']);
    }

    /**
     * 顧客IDによって検索できる.
     * @test
     */
    public function it_can_search_by_period()
    {
        $data = [
            'customer_id' => 1,
        ];

        $response = $this->actingAs($this->user)->get('/projects', array_merge($data));
        $this->assertDatabaseHas('projects', $data);
        $response->assertViewHasAll(['projects', 'projectsSelect', 'projectId', 'users', 'userId', 'startDate', 'endDate', 'customers', 'customerId', 'status']);
    }

    /**
     * 表示区分によって検索できる.
     * @test
     */
    public function it_can_search_by_status()
    {
        $data = [
            'end' => null
        ];

        $response = $this->actingAs($this->user)->get('/projects', array_merge($data));
        $this->assertDatabaseHas('projects', $data);
        $response->assertViewHasAll(['projects', 'projectsSelect', 'projectId', 'users', 'userId', 'startDate', 'endDate', 'customers', 'customerId', 'status']);
    }

    /**
     * プロジェクト台帳 表示できる.
     * @test
     */
    public function it_can_access_view_detail()
    {
        $response = $this->actingAs($this->user)->get('/projects/details');
        $response->assertStatus(200);
        $response->assertViewHasAll(['projects', 'projectsSelect', 'projectId', 'users', 'userId', 'startDate', 'endDate', 'customers', 'customerId', 'status']);
    }

    /**
     * プロジェクト台帳 顧客IDによって検索できる.
     * @test
     */
    public function it_can_search_detail_by_customer_id()
    {
        $data = [
            'customer_id' => 1,
        ];

        $response = $this->actingAs($this->user)->get('/projects/details', array_merge($data));
        $this->assertDatabaseHas('projects', $data);
        $response->assertViewHasAll(['projects', 'projectsSelect', 'projectId', 'users', 'userId', 'startDate', 'endDate', 'customers', 'customerId', 'status']);
    }

    /**
     * プロジェクト別予算対 表示できる.
     * @test
     */
    public function it_can_access_view_budget()
    {
        $response = $this->actingAs($this->user)->get('/projects/project-budgets');
        $response->assertStatus(200);
        $response->assertViewHasAll(['projects', 'projectsSelect', 'projectId', 'users', 'userId', 'startDate', 'endDate', 'customers', 'customerId', 'status']);
    }

    /**
     * プロジェクト別予算対 顧客IDによって検索できる.
     * @test
     */
    public function it_can_search_budget_by_customer_id()
    {
        $data = [
            'customer_id' => 1,
        ];

        $response = $this->actingAs($this->user)->get('/projects/project-budgets', array_merge($data));
        $this->assertDatabaseHas('projects', $data);
        $response->assertViewHasAll(['projects', 'projectsSelect', 'projectId', 'users', 'userId', 'startDate', 'endDate', 'customers', 'customerId', 'status']);
    }
}
