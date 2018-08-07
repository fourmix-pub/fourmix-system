<?php

namespace Tests\Feature\Routes\SafetyMailRouteTests;

use App\Models\SafetyConfirmation;
use App\Models\SafetyMail;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Event;

class SafetyMailTest extends TestCase
{
    /**
     * テストユーザー
     * @var
     */
    private $user;

    public function setUp()
    {
        parent::setUp();
        Event::fake();
        $this->user = factory(User::class)->create();
    }

    /**
     * @test
     */
    public function it_can_access_index()
    {
        $response = $this->actingAs($this->user)->get('/safety-mails');
        $response->assertStatus(200);
        $response->assertViewHas(['safetyMails']);
    }
}
