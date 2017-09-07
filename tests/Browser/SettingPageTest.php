<?php

namespace Tests\Browser;

use App\User;
use Tests\Browser\Pages\Setting;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SettingPageTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                ->visit(new Setting());
//                ->click('#'.User::latest()->first()->id)
//                ->assertInputValue('name', User::where('id', User::latest()->first()->id)->first()->name)
//                ->assertInputValue('cost', User::where('id', User::latest()->first()->id)->first()->cost);
//                ->assertInputValue('department_id', User::where('id', User::latest()->first()->id)->first()->department_id)
//                ->assertInputValue('start', User::where('id', User::latest()->first()->id)->first()->start)
//                ->assertInputValue('end', User::where('id', User::latest()->first()->id)->first()->end);
        });
    }
}
