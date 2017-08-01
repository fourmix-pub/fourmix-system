<?php

namespace Tests\Feature\Routes\SettingRouteTests;

use App\Models\WorkType;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class WorkTypeRouteTest extends TestCase
{
    /**
     * テストユーザー
     * @var
     */
    private $user;

    /**
     * テスト作業分類
     * @var
     */
    private $workType;

    /**
     *
     * @before
     */
    public function create_test_data()
    {
        $this->user = factory(User::class)->create();
        $this->workType = factory(WorkType::class)->create();
    }

    /**
     *
     * @test
     */
    public function it_can_access_index()
    {
        $response = $this->actingAs($this->user)->get('/settings/work-type');
        $response->assertStatus(200);
        $response->assertViewHasAll(['workTypes']);
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

        $response = $this->actingAs($this->user)->patch('/settings/work-type/'.$this->workType->id, array_merge($data, ['_token' => csrf_token()]));
        $this->assertDatabaseHas('work_types', $data);
        $response->assertStatus(302);
    }

    /**
     *
     * @test
     */
    public function it_can_delete()
    {
        $response = $this->actingAs($this->user)->delete('/settings/work-type/'.$this->workType->id);
        $response->assertStatus(302);
    }
}