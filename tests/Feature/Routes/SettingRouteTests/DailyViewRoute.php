<?php

namespace Tests\Feature\Routes\SettingRouteTests;

use App\Models\Daily;
use App\User;
use Tests\TestCase;

class DailyViewRoute extends TestCase
{

    /**
     * テストユーザー
     * @var
     */
    private $user;

    /**
     * テスト用日報
     * @var
     */
    private $daily;

    /**
     * テストデータ作成
     * @before
     */
    public function create_test_data()
    {
        $this->user = factory(User::class)->create();
        $this->daily = factory(Daily::class)->create();
    }

    /**
     * 一覧表示できる
     * @test
     */
    public function it_can_access_view()
    {
        $response = $this->actingAs($this->user)->get('/dailies/view');
        $response->assertStatus(200);
        $response->assertViewHasAll(['dailies', 'dailiesSelect', 'userId', 'users', 'userId', 'projects', 'projectId', 'workTypes', 'workTypeId', 'startDate', 'endDate']);
    }

    /**
     * 編集できる.
     * @test
     */
    public function it_can_edit()
    {
        $data = [
            'user_id'=> rand(1, 31),
            'work_type_id' => rand(1, 20),
            'job_type_id' => rand(1, 3),
            'project_id' => rand(1,30),
            'date' => '2016-10-08',
            'start' => '09:00:00',
            'end' => '19:30:00',
            'rest' => 60,
            'time' => 8,
            'cost' => 6000,
            'note' => 'テストテストテストテストテストテスト',
        ];

        $response = $this->actingAs($this->user)->patch('/dailies/view/'.$this->daily->id, array_merge($data, ['_token' => csrf_token()]));
        $this->assertDatabaseHas('dailies', $data);
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

//    /**
//     * 削除できる(退職).
//     * @test
//     */
//    public function it_can_delete()
//    {
//        $response = $this->actingAs($this->user)->delete('/settings/users/'.$this->testUser->id);
//        $response->assertStatus(302);
//    }
//
//    /**
//     * 検索できる.
//     * @test
//     */
//    public function it_can_search()
//    {
//        $data = [
//            'department_id' => 1,
//        ];
//
//        $response = $this->actingAs($this->user)->get('/settings/users', array_merge($data, ['_token' => csrf_token()]));
//        $this->assertDatabaseHas('users', $data);
//        $response->assertViewHasAll(['users', 'usersSelect', 'userId', 'departments', 'departmentId']);
//    }
//
//    /**
//     * プロフィールの編集画面に遷移できる.
//     * @test
//     */
//    public function it_can_edit_profile()
//    {
//        $response = $this->actingAs($this->user)->get('/settings/users/'.$this->testUser->id.'/edit');
//        $response->assertStatus(200);
//        $response->assertViewHasAll(['user']);
//    }
//
//    /**
//     * プロフィールを変更できる.
//     * @test
//     */
//    public function it_can_change_profile()
//    {
//        $data = [
//            'name' => 'テスト二郎',
//            'email' => 'test33333@fourmix.co.jp',
//            'start' => '09:30:00',
//            'end' => '18:30:00',
//        ];
//
//        $response = $this->actingAs($this->user)->patch('/settings/profile/'.$this->testUser->id, array_merge($data, ['_token' => csrf_token()]));
//        $this->assertDatabaseHas('users', $data);
//        $response->assertStatus(302);
//        $response->assertSessionHas('status');
//    }
}
