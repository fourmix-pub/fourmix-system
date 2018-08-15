<?php

namespace Tests\Feature\Routes\SafetyMailRouteTests;

use App\Events\ModelEvents\SafetyMailCreated;
use App\Mail\SafetyTestMail;
use App\Models\SafetyConfirmation;
use App\User;
use Illuminate\Support\Facades\Mail;
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
        $formData = [
            'title' => 'テストテストテストテスト',
            'contents' => 'テストテストテストテストテスト',
        ];

        $response = $this->actingAs($this->user)
            ->post('/safety-mails', array_merge($formData, ['_token' => csrf_token()]));
        $this->assertDatabaseHas('safety_mails', $formData);
        $response->assertStatus(302);
        $response->assertSessionHas('status');
        Event::assertDispatched(SafetyMailCreated::class);
    }

    /**
     * 新規追加できない
     * @test
     */
    public function it_can_not_add()
    {
        $formData = [
            'title' => 'テストテストテストテストテストテストテストテスト',
            'contents' => 'テストテストテストテストテスト',
        ];

        $response = $this->actingAs($this->user)
            ->post('/safety-mails', array_merge($formData, ['_token' => csrf_token()]));
        $response->assertStatus(302);
        $response->assertSessionHasErrors('title');
    }

    /**
     * テストメールを送信できる
     * @test
     */
    public function it_can_send_testMail()
    {
        Mail::fake();

        $formData = [
            'title' => 'テストメール',
            'contents' => 'テストテストテストテストテストテストテスト',
            'email' => 'test@fourmix.co.jp',
        ];

        $response = $this->actingAs($this->user)
            ->post(route('ajax.safety-mails.test-mail', array_merge($formData, ['_token' => csrf_token()])));
        $response->assertStatus(200);
        $response->assertJson(['status' => 'OK']);

        Mail::assertSent(SafetyTestMail::class, function ($mail) use ($formData) {
            return $mail->build()->viewData['title'] === $formData['title']
                && $mail->hasTo($formData['email']);
        });
    }
}
