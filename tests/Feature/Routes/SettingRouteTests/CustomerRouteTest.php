<?php

namespace Tests\Feature\Routes\SettingRouteTests;

use App\User;
use Tests\TestCase;
use App\Models\Customer;

class CustomerRouteTest extends TestCase
{
    /**
     * テストユーザー
     * @var
     */
    private $user;

    /**
     * テスト作業分類.
     * @var
     */
    private $customer;

    /**
     * @before
     */
    public function create_test_data()
    {
        $this->user = factory(User::class)->create();
        $this->customer = factory(Customer::class)->create();
    }

    /**
     * @test
     */
    public function it_can_access_index()
    {
        $response = $this->actingAs($this->user)->get('/settings/customers');
        $response->assertStatus(200);
        $response->assertViewHasAll(['customers']);
    }

    /**
     * @test
     */
    public function it_can_add()
    {
        $data = [
            'name' => 'テスト',
            'type_id' => 1,
        ];
        $response = $this->actingAs($this->user)->post('/settings/customers', array_merge($data, ['_token' => csrf_token()]));
        $this->assertDatabaseHas('customers', $data);
        $response->assertStatus(302);
    }

    /**
     * @test
     */
    public function it_can_edit()
    {
        $data = [
            'name' => '編集テスト',
            'type_id' => 1,
        ];
        $response = $this->actingAs($this->user)->patch('/settings/customers/'.$this->customer->id, array_merge($data, ['_token' => csrf_token()]));
        $this->assertDatabaseHas('customers', $data);
        $response->assertStatus(302);
    }

    /**
     * @test
     */
    public function it_can_delete()
    {
        $response = $this->actingAs($this->user)->delete('/settings/customers/'.$this->customer->id);
        $response->assertStatus(302);
    }

    /**
     * @test
     */
    public function it_can_search()
    {
        $data = [
            'type_id' => 1,
        ];

        $response = $this->actingAs($this->user)->get('/settings/customers', array_merge($data, ['_token' => csrf_token()]));
        $this->assertDatabaseHas('customers', $data);
        $response->assertViewHasAll(['customers']);
    }
}
