<?php

namespace Tests\Feature\Routes\SafetyMailRouteTests;

use App\Models\SafetyConfirmation;
use App\Models\SafetyMail;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Event;

class SafetyMailRouteTest extends TestCase
{
    /**
     * テストユーザー
     * @var
     */
    private $user;

    /**
     * テストユーザーを作成
     */
    public function setUp()
    {
        parent::setUp();
        Event::fake();
        $this->user = factory(User::class)->create();
    }

    /**
     * インデックスページにアクセスできる.
     * @test
     */
    public function it_can_access_index()
    {
        $response = $this->actingAs($this->user)->get('/safety-mails');
        $response->assertStatus(200);
        $response->assertViewHas(['safetyMails']);
    }

    /**
     * 新規作成ページにアクセスできる.
     * @test
     */
    public function it_can_access_create()
    {
        $response = $this->actingAs($this->user)->get('/safety-mails/create');
        $response->assertStatus(200);
    }

    /**
     * 新規追加できる
     * @test
     */
    public function it_can_add()
    {
        $value = [
            'title' => 'テストテストテストテスト',
            'contents' => 'テストテストテストテストテスト',
        ];

        $response = $this->actingAs($this->user)
            ->post('/safety-mails', array_merge($value, ['_token' => csrf_token()]));
        $this->assertDatabaseHas('safety_mails', $value);
        $response->assertStatus(302);
        $response->assertSessionHas('status');
    }

    /**
     * 新規追加できない
     * @test
     */
    public function it_can_not_add()
    {
        $value = [
            'title' => 'テストテストテストテストテストテストテストテスト',
            'contents' => 'テストテストテストテストテスト',
        ];

        $response = $this->actingAs($this->user)
            ->post('/safety-mails', array_merge($value, ['_token' => csrf_token()]));
        $response->assertStatus(302);
        $response->assertSessionHasErrors('title');
    }
}