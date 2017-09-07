<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;
use Laravel\Dusk\Page as BasePage;

class Setting extends BasePage
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/settings/users';
    }

    /**
     * Assert that the browser is on the page.
     *
     * @param  Browser  $browser
     * @return void
     */
    public function assert(Browser $browser)
    {
        $browser->assertSee('USERS')
            ->assertSee('追加')
            ->assertSee('検索')
            ->assertSee('担当者')
            ->assertSee('作業分類')
            ->assertSee('勤務分類')
            ->assertSee('顧客')
            ->assertSee('USERS')
            ->assertSee('ID')
            ->assertSee('名前')
            ->assertSee('作業単価')
            ->assertSee('部署')
            ->assertSee('退職');
    }

    /**
     * Get the element shortcuts for the page.
     *
     * @return array
     */
    public function elements()
    {
        return [
            '@element' => '#selector',
        ];
    }
}
