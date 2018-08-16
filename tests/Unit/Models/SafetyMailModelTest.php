<?php

namespace Tests\Unit\Models;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Event;

class SafetyMailModelTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
        Event::fake();
    }

    /**
     * 安否確認済の割合を求める方法のテスト
     * @test
     */
    public function testConfirmationRate()
    {
        $safetyMail = factory(\App\Models\SafetyMail::class)->create();
        $users = factory(User::class, 4)->create();
        foreach ($users as $user) {
            factory(\App\Models\SafetyConfirmation::class)->create([
                'mail_id' => $safetyMail->id,
                'user_id' => $user->id,
                'is_confirmed' => true,
            ]);
        }
        $users = factory(User::class, 6)->create();
        foreach ($users as $user) {
            factory(\App\Models\SafetyConfirmation::class)->create([
                'mail_id' => $safetyMail->id,
                'user_id' => $user->id,
                'is_confirmed' => false,
            ]);
        }

        $this->assertEquals($safetyMail->confirmationRate(), 40);
    }
}
