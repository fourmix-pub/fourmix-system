<?php


namespace Tests\Feature\Routes\EventRouteTests;

use App\Models\Event as EventModel;
use Carbon\Carbon;
use Tests\TestCase;
use App\User;
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
}