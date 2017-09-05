<?php

namespace Tests\Feature\Routes\DailyRouteTests;

use App\Models\Daily;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DailyRouteTest extends TestCase
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
     * @test
     */
    public function it_can_access_index()
    {
        $response = $this->actingAs($this->user)->get('/dailies');
        $response->assertStatus(200);
        $response->assertViewHasAll(['dailies', 'projects', 'workTypes', 'jobTypes', 'date', 'dailiesJson']);
    }

    /**
     * 追加できる.
     * @test
     */
    public function it_can_add()
    {
        $data = [
            'work_type_id' => 1,
            'job_type_id' => 1,
            'project_id' => 2,
            'date' => '2017-10-21',
            'rest' => '20',
            'note' => 'テストテストテストテスト',
            'start' => '18:52',
            'end' => '19:22',
        ];

        $response = $this->actingAs($this->user)->post('/dailies', array_merge($data, ['_token' => csrf_token()]));
        $this->assertDatabaseHas('dailies', $data);
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
            'work_type_id' => 1,
            'job_type_id' => 1,
            'project_id' => 2,
            'date' => '2017-10-21',
            'rest' => '20',
            'note' => 'テストテストテストテスト',
            'start' => '20:52',
            'end' => '19:22',
        ];

        $response = $this->actingAs($this->user)->post('/dailies', array_merge($data, ['_token' => csrf_token()]));
        $response->assertStatus(302);
        $response->assertSessionHasErrors('end');
    }

    /**
     * 編集できる.
     * @test
     */
    public function it_can_edit()
    {
        $data = [
            'work_type_id' => rand(1, 20),
            'project_id' => rand(1, 30),
            'date' => '2016-10-08',
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
        $this->assertSoftDeleted('dailies', $this->daily->toArray());
    }
}
