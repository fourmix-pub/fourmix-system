<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLoginPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('E-MAIL')
                ->assertSee('PASSWORD')
                ->assertSee('ブラウザに保存')
                ->assertSee('LOGIN')
                ->assertSee('パスワードを忘れた方')
                ->clickLink('パスワードを忘れた方')
                ->assertSee('PASSWORD RESET')
                ->assertSee('E-MAIL')
                ->assertSee('メール送信');

            $browser->visit('/')
                ->type('email', 'fourmix-system@fourmix.co.jp')
                ->type('password', '123456')
                ->press('LOGIN')
                ->assertPathIs('/dailies');
        });
    }
}
