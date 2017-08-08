<?php

namespace Tests\Feature\Routes\SettingRouteTests;

use App\User;
use Tests\TestCase;

class UserRouteTest extends TestCase
{
    /**
     * テストユーザー
     * @var
     */
    private $user;

    /**
     * 追加、編集、削除用ユーザー
     * @var
     */
    private $testUser;

    /**
     * @before
     */
    public function create_test_data()
    {
        $this->user = factory(User::class)->create();
        $this->testUser = factory(User::class)->create();
    }

    /**
     * 表示できる.
     * @test
     */
    public function it_can_access_index()
    {
        $response = $this->actingAs($this->user)->get('/settings/users');
        $response->assertStatus(200);
        $response->assertViewHasAll(['users', 'usersSelect', 'userId', 'departments', 'departmentId']);
    }

    /**
     * 追加できる.
     * @test
     */
    public function it_can_add()
    {
        $data = [
            'name'   => 'yutafuseki',
            'email'    => 'test@fourmix.co.jp',
            'department_id' => 2,
            'cost' => 2000,
            'start' => '09:30:00',
            'end' => '18:30:00',
        ];
        $response = $this->actingAs($this->user)->post('/settings/users', array_merge($data, ['_token' => csrf_token()]));
        $this->assertDatabaseHas('users', $data);
        $response->assertStatus(302);
        $response->assertSessionHas('status');
    }

    /**
     *　追加できない.
     * @test
     */
    public function it_can_not_add()
    {
        $data = [
            'name'   => '',
            'email'    => 'test@fourmix.co.jp',
            'department_id' => 2,
            'cost' => 2000,
            'start' => '',
            'end' => '18:30:00',
        ];
        $response = $this->actingAs($this->user)->post('/settings/users', array_merge($data, ['_token' => csrf_token()]));
        $response->assertStatus(302);
        $response->assertSessionHasErrors('name');
        $response->assertSessionHasErrors('start');
    }

    /**
     * 編集できる.
     * @test
     */
    public function it_can_edit()
    {
        $data = [
            'name' => 'テスト花子',
            'email' => 'testtesttest2@fourmix.co.jp',
            'department_id' => 2,
            'cost' => 200,
            'start' => '09:30:00',
            'end' => '18:30:00',
        ];

        $response = $this->actingAs($this->user)->patch('/settings/users/'.$this->testUser->id, array_merge($data, ['_token' => csrf_token()]));
        $this->assertDatabaseHas('users', $data);
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
            'name' => 'テスト太郎',
            'email' => '',
            'department_id' => 2,
            'cost' => 2000,
            'start' => '09:30:00',
            'end' => '18:30:00',
        ];
        $response = $this->actingAs($this->user)->patch('/settings/users/'.$this->testUser->id, array_merge($data, ['_token' => csrf_token()]));
        $response->assertStatus(302);
        $response->assertSessionHasErrors('email');
    }

    /**
     * 削除できる.
     * @test
     */
    public function it_can_delete()
    {
        $response = $this->actingAs($this->user)->delete('/settings/users/'.$this->testUser->id);
        $response->assertStatus(302);
    }

    /**
     * 検索できる.
     * @test
     */
    public function it_can_search()
    {
        $data = [
            'department_id' => 1,
        ];

        $response = $this->actingAs($this->user)->get('/settings/users', array_merge($data, ['_token' => csrf_token()]));
        $this->assertDatabaseHas('users', $data);
        $response->assertViewHasAll(['users', 'usersSelect', 'userId', 'departments', 'departmentId']);
    }

    /**
     * プロフィールの編集画面に遷移できる.
     * @test
     */
    public function it_can_edit_profile()
    {
        $response = $this->actingAs($this->user)->get('/settings/users/'.$this->testUser->id.'/edit');
        $response->assertStatus(200);
        $response->assertViewHasAll(['user']);
    }

    /**
     * プロフィールを変更できる.
     * @test
     */
    public function it_can_change_profile()
    {
        $data = [
            'name' => 'テスト二郎',
            'email' => 'test33333@fourmix.co.jp',
            'start' => '09:30:00',
            'end' => '18:30:00',
        ];

        $response = $this->actingAs($this->user)->patch('/settings/profile/'.$this->testUser->id, array_merge($data, ['_token' => csrf_token()]));
        $this->assertDatabaseHas('users', $data);
        $response->assertStatus(302);
        $response->assertSessionHas('status');
    }
}
