<?php

namespace Tests\Browser;

use App\Models\JobType;
use App\Models\Project;
use App\Models\WorkType;
use App\User;
use Carbon\Carbon;
use Tests\Browser\Pages\Daily;
use Tests\Browser\Pages\Login;
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
    public function testDailyFunction()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                ->visit(new Daily())
                ->pause(10000)
                ->press('登録')
                ->waitForText('work type id は、必ず指定してください。')
                ->assertSee('work type id は、必ず指定してください。')
                ->select('project_id', 1)
                ->select('work_type_id', 1)
                ->type('start', '16:00')
                ->type('end', '19:00')
                ->type('rest', '60')
                ->select('job_type_id', 1)
                ->type('note', 'これはシナリオテストです')
                ->press('登録')
                ->pause(10000)
                ->assertPathIs('/dailies')
                ->assertSee(Carbon::now()->format('Y/m/d'))
                ->assertSee(Project::where('id', 1)->first()->name)
                ->assertSee(WorkType::where('id', 1)->first()->name)
                ->assertSee('16:00')
                ->assertSee('19:00')
                ->assertSee('60')
                ->assertSee(JobType::where('id', 1)->first()->name)
                ->clickLink('DAILY REPORTS')
                ->clickLink('日報閲覧')
                ->pause(5000)
                ->assertPathIs('/dailies/view')
                ->assertSee('VIEW')
                ->assertSee('検索')
                ->assertSee('日付')
                ->assertSee('プロジェクト名')
                ->assertSee('作業分類')
                ->assertSee('作業時間')
                ->assertSee('作業金額')
                ->assertSee(User::where('id', 1)->first()->name)
                ->assertSee(Carbon::now()->format('Y/m/d'))
                ->assertSee(Project::where('id', 1)->first()->name)
                ->assertSee(WorkType::where('id', 1)->first()->name)
                ->assertSee(2)
                ->assertSee('¥'.(2 * User::where('id', 1)->first()->cost))
                ->assertSee('備考：これはシナリオテストです')
                ->press('検索')
                ->select('user_id', 1)
                ->select('project_id', 1)
                ->click('#daily-search')
                ->pause(5000)
                ->assertSee(User::where('id', 1)->first()->name)
                ->assertSee(Carbon::now()->format('Y/m/d'))
                ->assertSee(Project::where('id', 1)->first()->name)
                ->assertSee(WorkType::where('id', 1)->first()->name)
                ->assertSee(2)
                ->assertSee('¥'.(2 * User::where('id', 1)->first()->cost))
                ->assertSee('備考：これはシナリオテストです');
        });
    }
}
