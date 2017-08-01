<?php

namespace Tests\Feature\Routes\SettingRouteTests;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class WorkTypeRouteTest extends TestCase
{
    private $user;

    /**
     *
     * @before
     */
    public function create_test_data()
    {
        $this->user = User::where('name','Admin')->first();
    }

    /**
     *
     * @test
     */
    public function it_can_access_index()
    {
        $response = $this->actingAs($this->user)->get('/settings/work-type');
        $response->assertStatus(200);
    }

    /**
     *
     * @test
     */
    public function it_can_add()
    {
        $data = [
          'name' => '追加テスト',
        ];

        $response = $this->actingAs($this->user)->post('/settings/work-type', array_merge($data, ['_token' => csrf_token()]));
        $this->assertDatabaseHas('work_types', $data);
        $response->assertStatus(302);
    }

    /**
     *
     * @test
     */
    public function it_can_edit()
    {
        $data = [
            'name' => '編集テスト',
        ];

        $response = $this->actingAs($this->user)->patch('/settings/work-type/27', array_merge($data, ['_token' => csrf_token()]));
        $this->assertDatabaseHas('work_types', $data);
        $response->assertStatus(302);
    }

    /**
     *
     * @test
     */
    public function it_can_delete()
    {
        $response = $this->actingAs($this->user)->delete('/settings/work-type/14');
        $response->assertStatus(302);
    }
}