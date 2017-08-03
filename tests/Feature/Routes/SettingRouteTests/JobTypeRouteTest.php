<?php

namespace Tests\Feature\Routes\SettingRouteTests;

use App\Models\JobType;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class JobTypeRouteTest extends TestCase
{
    /**
     * テストユーザー
     * @var
     */
    private $user;

    /**
     * テスト作業分類.
     * @var
     */
    private $jobType;

    /**
     * テストデータ作成.
     * @before
     */
    public function create_test_data()
    {
        $this->user = factory(User::class)->create();
        $this->jobType = factory(JobType::class)->create();
    }

    /**
     * インデックスページにアクセスできる.
     * @test
     */
    public function it_can_access_index()
    {
        $response = $this->actingAs($this->user)->get('/settings/job-types');
        $response->assertStatus(200);
        $response->assertViewHasAll(['jobTypes']);
    }

    /**
     * 追加できる.
     * @test
     */
    public function it_can_add()
    {
        $data = [
            'name' => '追加テスト',
            'unit_betting_rate' => 1.23,
        ];

        $response = $this->actingAs($this->user)->post('/settings/job-types', array_merge($data, ['_token' => csrf_token()]));
        $this->assertDatabaseHas('job_types', $data);
        $response->assertStatus(302);
        $response->assertSessionHas('status');
    }

    /**
     * 追加できない.
     * @test
     */
    public function it_can_not_add()
    {
        $data = [
            'name' => '',
            'unit_betting_rate' => '',
        ];

        $response = $this->actingAs($this->user)->post('/settings/job-types', array_merge($data, ['_token' => csrf_token()]));
        $response->assertStatus(302);
        $response->assertSessionHasErrors('name');
        $response->assertSessionHasErrors('unit_betting_rate');
    }

    /**
     * 編集できる.
     * @test
     */
    public function it_can_edit()
    {
        $data = [
            'name' => '編集テスト',
            'unit_betting_rate' => 1.23,
        ];

        $response = $this->actingAs($this->user)->patch('/settings/job-types/'.$this->jobType->id, array_merge($data, ['_token' => csrf_token()]));
        $this->assertDatabaseHas('job_types', $data);
        $response->assertStatus(302);
        $response->assertSessionHas('status');
    }

    /**
     * 編集できない.
     * @test
     */
    public function it_can_not_edit()
    {
        $data = [
            'name' => '',
            'unit_betting_rate' => '',
        ];

        $response = $this->actingAs($this->user)->patch('/settings/job-types/'.$this->jobType->id, array_merge($data, ['_token' => csrf_token()]));
        $response->assertStatus(302);
        $response->assertSessionHasErrors('name');
        $response->assertSessionHasErrors('unit_betting_rate');
    }

    /**
     * 削除できる.
     * @test
     */
    public function it_can_delete()
    {
        $response = $this->actingAs($this->user)->delete('/settings/job-types/'.$this->jobType->id);
        $response->assertStatus(302);
        $response->assertSessionHas('status');
    }
}
