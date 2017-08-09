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
     * 表示できる.
     * @test
     */
    public function it_can_access_index()
    {
        $response = $this->actingAs($this->user)->get('/settings/customers');
        $response->assertStatus(200);
        $response->assertViewHasAll(['customers', 'customersSelect', 'customerId']);
    }

    /**
     * 追加できる.
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
        $response->assertSessionHas('status');
    }

    /**
     *　追加できない.
     * @test
     */
    public function it_can_not_add()
    {
        $data = [
            'name' => '',
            'type_id' => '',
        ];
        $response = $this->actingAs($this->user)->post('/settings/customers', array_merge($data, ['_token' => csrf_token()]));
        $response->assertStatus(302);
        $response->assertSessionHasErrors('name');
        $response->assertSessionHasErrors('type_id');
    }

    /**
     * 編集できる.
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
        $response->assertSessionHas('status');
    }

    /**
     *　編集できない.
     * @test
     */
    public function it_can_not_edit()
    {
        $data = [
            'name' => '',
            'type_id' => '',
        ];
        $response = $this->actingAs($this->user)->patch('/settings/customers/'.$this->customer->id, array_merge($data, ['_token' => csrf_token()]));
        $response->assertStatus(302);
        $response->assertSessionHasErrors('name');
        $response->assertSessionHasErrors('type_id');
    }

    /**
     * 削除できる.
     * @test
     */
    public function it_can_delete()
    {
        $response = $this->actingAs($this->user)->delete('/settings/customers/'.$this->customer->id);
        $response->assertStatus(302);
        $this->assertSoftDeleted('customers', $this->customer->toArray());
    }

    /**
     * 検索できる.
     * @test
     */
    public function it_can_search()
    {
        $data = [
            'type_id' => 1,
        ];

        $response = $this->actingAs($this->user)->get('/settings/customers', array_merge($data, ['_token' => csrf_token()]));
        $this->assertDatabaseHas('customers', $data);
        $response->assertViewHasAll(['customers', 'customersSelect', 'customerId']);
    }
}
