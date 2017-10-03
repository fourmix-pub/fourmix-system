<?php

namespace Tests\Feature\Routes\SettingRouteTests;

use App\Models\Daily;
use App\User;
use Tests\TestCase;

class ViewRouteTest extends TestCase
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

    public function setUp()
    {
        parent::setUp();
        $this->user = factory(User::class)->create();
        $this->daily = factory(Daily::class)->create();
    }

    /**
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
            'work_type_id' => 2,
            'job_type_id' => 2,
            'project_id' => 1,
            'date' => '2017-11-22',
            'rest' => '30',
            'note' => 'テストテストテストテスト',
            'start' => '12:52',
            'end' => '16:22',
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
            'work_type_id' => rand(1, 20),
            'project_id' => rand(1, 30),
            'date' => '',
            'note' => 'テストテストテストテストテストテスト',
        ];
        $response = $this->actingAs($this->user)->patch('/dailies/view/'.$this->daily->id, array_merge($data, ['_token' => csrf_token()]));
        $response->assertStatus(302);
        $response->assertSessionHasErrors('date');
    }

    /**
     * 削除できる.
     * @test
     */
    public function it_can_delete()
    {
        $response = $this->actingAs($this->user)->delete('/dailies/view/'.$this->daily->id, ['_token' => csrf_token()]);
        $response->assertStatus(302);
        $response->assertSessionHas('status');
    }

    /**
     * 検索できる.
     * @test
     */
    public function it_can_search()
    {
        $data = [
            'work_type_id' => 1,
        ];

        $response = $this->actingAs($this->user)->get('/dailies/view', array_merge($data, ['_token' => csrf_token()]));
        $this->assertDatabaseHas('dailies', $data);
        $response->assertViewHasAll(['dailies', 'dailiesSelect', 'userId', 'users', 'userId', 'projects', 'projectId', 'workTypes', 'workTypeId', 'startDate', 'endDate']);
    }
}
