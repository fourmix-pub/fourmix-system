<?php

namespace Tests\Feature\Routes\ScheduleRouteTests;

use App\Models\WeekSchedule;
use App\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Event;

class ScheduleRouteTest extends TestCase
{
    /**
     * テスト用ユーザー
     * @var
     */
    private $user;

    /**
     * テスト用スケジュール
     * @var
     */
    private $weekSchedule;

    public function setUp()
    {
        parent::setUp();
        Event::fake();
        $this->user = factory(User::class)->create();
        $this->weekSchedule = WeekSchedule::create([
            "schedule" => "予定テスト",
            "date" => "2018-08-10",
            "user_id" => 1,
        ]);
    }

    /**
     * 一覧表示
     * @test
     */
    public function it_can_access_index()
    {
        $response = $this->actingAs($this->user)->get('/schedules/index');
        $response->assertStatus(200);
        $response->assertViewHasAll(['userId', 'user', 'weekSchedules', 'users']);
    }

    /**
     * @test
     */
    public function it_can_access_create()
    {
        $response = $this->actingAs($this->user)->get('/schedules/create');
        $response->assertStatus(200);
        $response->assertViewIs('layouts.my-schedules.create');
        $response->assertViewHasAll(['collections']);
    }

    /**
     * ログインユーザの予定
     * 新規作成
     * @test
     */
    public function it_can_add()
    {
        $value = [
            "schedule" => "予定テスト",
            "result" => "結果テスト",
            "share" => "共有テスト",
            "date" => "2018-08-08",
        ];
        $response = $this->actingAs($this->user)
            ->post('/schedules', array_merge($value, ['_token' => csrf_token()]));
        $this->assertDatabaseHas('week_schedules', $value);
        $response->assertStatus(302);
        $response->assertSessionHas('status');
    }

    /**
     * ログインユーザの予定
     * 一覧表示
     * @test
     */
    public function it_can_access_user_index()
    {
        $response = $this->actingAs($this->user)->get('/schedules/my-schedule');
        $response->assertStatus(200);
        $response->assertViewHasAll(['userId', 'user', 'weekSchedules', 'users']);
    }

    /**
     * ログインユーザの予定
     * 編集
     * @test
     */
    public function it_can_edit()
    {
        $value = [
            "schedule" => "予定編集テスト",
            "result" => "結果編集テスト",
            "share" => "共有編集テスト",
        ];
        $response = $this->actingAs($this->user)
            ->put('/schedules/'.$this->weekSchedule->id, array_merge($value, ['_token' => csrf_token()]));
        $this->assertDatabaseHas('week_schedules', $value);
        $response->assertStatus(302);
        $response->assertSessionHas('status');
    }

    /**
     * 個人予定
     * 詳細表示
     * @test
     */
    public function it_can_access_detail()
    {
        $response = $this->actingAs($this->user)->get('/schedules/show/1');
        $response->assertStatus(200);
        $response->assertViewHasAll(['userId', 'user', 'weekSchedules', 'users']);
    }
}
