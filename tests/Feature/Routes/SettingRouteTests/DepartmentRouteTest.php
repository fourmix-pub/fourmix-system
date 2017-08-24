<?php

namespace Tests\Feature\Routes\SettingRouteTests;

use App\User;
use Tests\TestCase;
use App\Models\Department;

class DepartmentRouteTest extends TestCase
{
    /**
     * テストユーザー
     * @var
     */
    private $user;

    /**
     * テスト部門.
     * @var
     */
    private $department;

    /**
     * テストデータ作成.
     * @before
     */
    public function create_test_data()
    {
        $this->user = factory(User::class)->create();
        $this->department = factory(Department::class)->create();
    }

    /**
     * インデックスページにアクセスできる.
     * @test
     */
    public function it_can_access_index()
    {
        $response = $this->actingAs($this->user)->get('/settings/departments');
        $response->assertStatus(200);
        $response->assertViewHasAll(['departments']);
    }

    /**
     * 追加できる.
     * @test
     */
    public function it_can_add()
    {
        $data = [
            'name' => '追加テスト',
        ];

        $response = $this->actingAs($this->user)->post('/settings/departments', array_merge($data, ['_token' => csrf_token()]));
        $this->assertDatabaseHas('departments', $data);
        $response->assertStatus(302);
        $response->assertSessionHas('status');
    }

    /**
     * 追加できない.
     * @test
     */
    public function it_can_not_add()
    {
        $data = [
            'name' => '',
        ];

        $response = $this->actingAs($this->user)->post('/settings/departments', array_merge($data, ['_token' => csrf_token()]));
        $response->assertStatus(302);
        $response->assertSessionHasErrors(['name']);
    }

    /**
     * 編集できる.
     * @test
     */
    public function it_can_edit()
    {
        $data = [
            'name' => '編集テスト',
        ];

        $response = $this->actingAs($this->user)->patch('/settings/departments/'.$this->department->id, array_merge($data, ['_token' => csrf_token()]));
        $this->assertDatabaseHas('departments', $data);
        $response->assertStatus(302);
        $response->assertSessionHas('status');
    }

    /**
     * 編集できない.
     * @test
     */
    public function it_can_not_edit()
    {
        $data = [
            'name' => '',
        ];

        $response = $this->actingAs($this->user)->patch('/settings/departments/'.$this->department->id, array_merge($data, ['_token' => csrf_token()]));
        $response->assertStatus(302);
        $response->assertSessionHasErrors('name');
    }

    /**
     * 削除できる.
     * @test
     */
    public function it_can_delete()
    {
        $response = $this->actingAs($this->user)->delete('/settings/departments/'.$this->department->id, ['_token' => csrf_token()]);
        $response->assertStatus(302);
        $response->assertSessionHas('status');
        $this->assertSoftDeleted('departments', $this->department->toArray());
    }
}
