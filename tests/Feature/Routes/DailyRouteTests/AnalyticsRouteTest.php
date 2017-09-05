<?php

namespace Tests\Feature\Routes\DailyRouteTests;

use App\Models\Project;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AnalyticsRouteTest extends TestCase
{
    /**
     * テストユーザー
     * @var
     */
    private $user;

    public function setUp()
    {
        parent::setUp();
        $this->user = factory(User::class)->create();
    }

    /**
     * @test
     */
    public function it_can_access_view()
    {
        $response = $this->actingAs($this->user)->get('/dailies/analytics/work-types-by-project');
        $response->assertStatus(200);
        $response->assertViewHasAll(['projectsSelect', 'project', 'projectId']);

        $response = $this->actingAs($this->user)->get('/dailies/analytics/users-by-project');
        $response->assertStatus(200);
        $response->assertViewHasAll(['projectsSelect', 'project', 'projectId']);

        $response = $this->actingAs($this->user)->get('/dailies/analytics/work-types-by-user');
        $response->assertStatus(200);
        $response->assertViewHasAll(['usersSelect', 'user', 'userId']);

        $response = $this->actingAs($this->user)->get('/dailies/analytics/projects-by-user');
        $response->assertStatus(200);
        $response->assertViewHasAll(['usersSelect', 'user', 'userId']);
    }

    /**
     * 検索できる.
     * @test
     */
    public function it_can_search()
    {
        $data = [
            'id' => 1,
        ];

        $response = $this->actingAs($this->user)->get('/dailies/analytics/work-types-by-project', array_merge($data));
        $this->assertDatabaseHas('projects', $data);
        $response->assertViewHasAll(['projectsSelect', 'project', 'projectId']);

        $response = $this->actingAs($this->user)->get('/dailies/analytics/users-by-project', array_merge($data));
        $this->assertDatabaseHas('projects', $data);
        $response->assertViewHasAll(['projectsSelect', 'project', 'projectId']);

        $data = [
            'id' => 1,
        ];

        $response = $this->actingAs($this->user)->get('/dailies/analytics/work-types-by-user', array_merge($data));
        $this->assertDatabaseHas('users', $data);
        $response->assertViewHasAll(['usersSelect', 'user', 'userId']);

        $response = $this->actingAs($this->user)->get('/dailies/analytics/projects-by-user', array_merge($data));
        $this->assertDatabaseHas('users', $data);
        $response->assertViewHasAll(['usersSelect', 'user', 'userId']);
    }
}
