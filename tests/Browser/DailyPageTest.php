<?php

namespace Tests\Browser;

use App\User;
use Carbon\Carbon;
use Tests\Browser\Pages\Daily;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class DailyPageTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testDailyPageIndex()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                ->visit(new Daily())
                ->assertInputValue('date', Carbon::now()->format('Y-m-d'));
        });
    }

    public function testDateSearchForm()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                ->visit(new Daily())
                ->value('#date-search-input', '2016-10-08')
                ->click('#date-search-submit')
                ->pause(2000)
                ->assertInputValue('date', '2016-10-08')
                ->assertSee('10月 2016');
        });
    }
}
