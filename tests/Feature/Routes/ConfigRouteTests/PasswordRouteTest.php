<?php

namespace Tests\Feature\Routes\ConfigRouteTests;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PasswordRouteTest extends TestCase
{
    /**
     * テストユーザー
     * @var
     */
    private $user;

    public function setUp()
    {
        parent::setUp();
        $this->user = User::find(1);
    }

    /**
     * パスワード編集ページにアクセスできる.
     * @test
     */
    public function it_can_access_password_edit_page()
    {
        $response = $this->actingAs($this->user)->get('/config/password');
        $response->assertStatus(200);
        $response->assertViewHasAll(['nav']);
    }

    /**
     * パスワード変更できる
     * @test
     */
    public function it_can_post_password()
    {
        $data = [
            'old_password' => '123456',
            'password' => '123456',
            'password_confirmation' => '123456',
        ];
        $response = $this->actingAs($this->user)->post('/config/password', array_merge($data, ['_token' => csrf_token()]));
        $response->assertStatus(302);
        $response->assertSessionHas('status');
    }

    /**
     * 認証エラーによるパスワード変更不能
     * @test
     */
    public function it_can_not_post_password_because_old_password_filed()
    {
        $data = [
            'old_password' => '654321',
            'password' => '123456',
            'password_confirmation' => '123456',
        ];
        $response = $this->actingAs($this->user)->post('/config/password', array_merge($data, ['_token' => csrf_token()]));
        $response->assertStatus(302);
        $response->assertSessionHasErrors();
    }

    /**
     * パスワード確認によるパスワード変更不能
     * @test
     */
    public function it_can_not_post_password_because_password_confirmation_filed()
    {
        $data = [
            'old_password' => '123456',
            'password' => '123456',
            'password_confirmation' => '123457',
        ];
        $response = $this->actingAs($this->user)->post('/config/password', array_merge($data, ['_token' => csrf_token()]));
        $response->assertStatus(302);
        $response->assertSessionHasErrors(['password']);
    }
}
