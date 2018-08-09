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
//        $this->weekSchedule = factory(WeekSchedule::class)->create();
    }

    /**
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
     * 新規作成ができる
     * @test
     */
    public function it_can_add()
    {
        //保存するためのデータを用意する
        $value = [
            "schedule" => "予定テスト",
            "result" => "結果テスト",
            "share" => "共有テスト",
            "date" => "2018-08-08",
        ];
        //保存するためのデータをPOSTする
        //URL（week-schedules.store）を流す
        $response = $this->actingAs($this->user)
            ->post('/schedules/create', array_merge($value, ['_token' => csrf_token()]));

        //コントローラを呼ぶ
        //コントローラで保存される
        //DBに保存される
        //入力したデータと同じ情報か
        $this->assertDatabaseHas('week_schedules', $value);
        $response->assertStatus(302);
        $response->assertSessionHas('status');

    }

}
