<?php

namespace Tests\Feature\Routes\SafetyMailRouteTests;

use App\Models\SafetyConfirmation;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Event;

class ConfirmationUpdateRouteTest extends TestCase
{
    /**
     * テストユーザー
     * @var
     */
    private $user;

    /**
     * 更新前の安否確認情報
     * @var
     */
    private $safetyConfirmation;

    /**
     * テストユーザーを作成
     * 更新前の安否確認情報を作成
     */
    public function setUp()
    {
        parent::setUp();
        Event::fake();
        $this->user = factory(User::class)->create();
        $this->safetyConfirmation = new SafetyConfirmation();
        $this->safetyConfirmation->user_id = 10000;
        $this->safetyConfirmation->mail_id = 10000;
        $this->safetyConfirmation->save();
    }

    /**
     * 安否確認情報を更新できる.
     * @test
     */
    public function it_can_update()
    {

        $data = [
            'mail_id' => 10000,
            'user_id' => 10000,
            'is_confirmed' => true,
        ];

        $response = $this->get(route('confirmation', [
            'token' => encrypt($this->safetyConfirmation->user_id.'/'.$this->safetyConfirmation->mail_id)
        ]));
        $this->assertDatabaseHas('safety_confirmations', $data);
        $response->assertStatus(200);
    }
}
