<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;
use Laravel\Dusk\Page as BasePage;

class Daily extends BasePage
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/dailies';
    }

    /**
     * Assert that the browser is on the page.
     *
     * @param  Browser  $browser
     * @return void
     */
    public function assert(Browser $browser)
    {
        $browser->assertPathIs($this->url())
            ->assertSee('DAILY REPORTS')
            ->assertSee('本日')
            ->assertSee('月')
            ->assertSee('日')
            ->assertSee('日報一覧')
            ->assertSee('日付')
            ->assertSee('プロジェクト名')
            ->assertSee('作業分類')
            ->assertSee('開始時刻')
            ->assertSee('終了時刻')
            ->assertSee('休憩時間(分)')
            ->assertSee('勤務分類')
            ->assertSee('登録');
    }

    /**
     * Get the element shortcuts for the page.
     *
     * @return array
     */
    public function elements()
    {
        return [
            //
        ];
    }
}
