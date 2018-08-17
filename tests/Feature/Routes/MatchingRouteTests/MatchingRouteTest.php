<?php

namespace Tests\Feature\Routes\MatchingRouteTests;

use App\Models\Match;
use Illuminate\Support\Facades\Event;
use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class MatchingRouteTest extends TestCase
{
    /**
     * テストユーザー
     * @var
     */
    private $user;

    /**
     * テスト用マッチング
     * @var
     */
    private $match;

    public function setUp()
    {
        parent::setUp();
        Event::fake();
        $this->user = factory(User::class)->create();
        $this->match = factory(Match::class)->create();
    }

    /**
     * 出欠登録ができる
     * @test
     */
    public function it_can_entry()
    {
        $data = [
            'participation' => true,
        ];
        $response = $this->actingAs($this->user)->put(
            'matching/entry', array_merge($data, ['_token' => csrf_token()])
        );
        $this->assertDatabaseHas('matches', [ 'participation' => 1,]);
        $response->assertStatus(302);
        $response->assertSessionHas('status');
    }
}