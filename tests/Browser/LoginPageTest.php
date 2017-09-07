<?php

namespace Tests\Browser;

use App\User;
use Tests\Browser\Pages\Login;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginPageTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLoginFunction()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(new Login())
                ->type('email', User::where('id', 1)->first()->email)
                ->type('password', '123456')
                ->press('LOGIN')
                ->pause(5000)
                ->assertPathIs('/dailies')
                ->clicklink('Admin')
                ->clicklink('ログアウト')
                ->pause(5000)
                ->assertPathIs('/')
                ->type('email', User::where('id', 1)->first()->email.'aaaa')
                ->type('password', '123456')
                ->press('LOGIN')
                ->pause(5000)
                ->assertSee('認証情報と一致するレコードがありません。')
                ->clickLink('パスワードを忘れた方')
                ->assertSee('PASSWORD RESET')
                ->assertSee('E-MAIL')
                ->assertSee('メール送信');
        });
    }
}
