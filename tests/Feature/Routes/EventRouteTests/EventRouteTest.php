<?php

namespace Tests\Feature\Routes\EventRouteTests;

use App\Models\Event as EventModel;
use Carbon\Carbon;
use Tests\TestCase;
use App\User;
use App\Models\EventEntry;

use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Event;

class EventRouteTest extends TestCase
{
    /**
     * テストユーザー
     * @var
     */
    private $user;

    /**
     * テスト用イベント
     * @var
     */
    private $event;

    public function setUp()
    {
        parent::setUp();
        Event::fake();
        $this->user = factory(User::class)->create();
        $this->event = factory(EventModel::class)->create();
    }

    /**
     * インデックスアクセステスト
     * @test
     */
    public function it_can_access_index()
    {
        $response = $this->actingAs($this->user)->get('/events');
        $response->assertStatus(200);
        $response->assertViewHasAll(['events']);
    }

    /**
     * 追加できる
     * @test
     */
    public function it_can_add()
    {
        $data = [
            'title' => 'テストテストテスト',
            'contents' => 'テストテストテストテストテスト',
            'location' => 'テストテストテストテスト',
        ];

        $date = [
            'dates' => [
                0 => Carbon::today()
            ],
        ];

        $response = $this->actingAs($this->user)->post('/events', array_merge($data, $date, ['_token' => csrf_token()]));
        $this->assertDatabaseHas('events', $data);
        $this->assertDatabaseHas('event_dates', ['date' => Carbon::today()]);
        $response->assertStatus(302);
        $response->assertSessionHas('status');
    }

    /**
     * 追加できない
     * @test
     */
    public function it_cannot_add()
    {
        $data = [
            'title' => 'テストテストテストテストテストテストテストテストテストテストテストテストテストテストテスト
        テストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテスト',
            'location' => '',
        ];
        $date = [
            'dates' => [
                0 => '一月八日',
            ],
        ];

        $response = $this->actingAs($this->user)->post('/events', array_merge($data, $date, ['_token' => csrf_token()]));
        $response->assertStatus(302);
        $response->assertSessionHasErrors(['title','location','dates.0']);
    }

    /**
     * 詳細アクセステスト
     * @test
     */
    public function it_can_access_detail()
    {
        $response = $this->actingAs($this->user)->get('events/detail/1');
        $response->assertStatus(200);
        $response->assertViewHasAll(['event']);
    }

    /**
     * 出欠の登録ができる
     * @test
     */
    public function it_can_entry()
    {
        $data = [
            "day" => [
                4 => "1",
                5 => "1",
                6 => "1",
             ]
        ];
        $response = $this->actingAs($this->user)->post(
            'events/1/entry', array_merge($data, ['_token' => csrf_token()])
        );
        $this->assertDatabaseHas('event_entry', ['date_id' => 4, 'participation' => 1,]);
        $this->assertDatabaseHas('event_entry', ['date_id' => 5, 'participation' => 1,]);
        $this->assertDatabaseHas('event_entry', ['date_id' => 6, 'participation' => 1,]);
        $response->assertStatus(302);
        $response->assertSessionHas('status');
    }

    /**
     * 編集できる
     * @test
     */
    public function it_can_edit()
    {
        $data =[
            'is_opened' => 1,
        ];
        $response = $this->actingAs($this->user)->put(
            'events/'.$this->event->id.'/update', array_merge($data, ['_token' => csrf_token()]
            ));
        $this->assertDatabaseHas('events', $data);
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
            'is_opened' => '3',
        ];
        $response = $this->actingAs($this->user)->put(
            'events/'.$this->event->id.'/update', array_merge($data, ['_token' => csrf_token()])
        );
        $response->assertStatus(302);
        $response->assertSessionHasErrors('is_opened');
    }
}