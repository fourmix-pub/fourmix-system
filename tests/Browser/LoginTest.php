<?php

namespace Tests\Browser;

use Tests\Browser\Pages\Login;
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
            $browser->visit(new Login())
                ->clickLink('パスワードを忘れた方')
                ->assertSee('PASSWORD RESET')
                ->assertSee('E-MAIL')
                ->assertSee('メール送信');

            $browser->visit(new Login())
                ->type('email', 'fourmix-system@fourmix.co.jp')
                ->type('password', '123456')
                ->press('LOGIN')
                ->assertPathIs('/dailies');
        });
    }
}
