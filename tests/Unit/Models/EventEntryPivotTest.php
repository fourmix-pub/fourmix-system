<?php

namespace Tests\Unit\Models;

use App\Models\EventEntry;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\HtmlString;

class EventEntryPivotTest extends TestCase
{
    /**
     * イベントエントリーモデル（3パターン）
     * @var
     */
    protected $eventEntryOne, $eventEntryTwo, $eventEntryThree;

    /**
     * イベントエントリーモデル（例外）
     * @var
     */
    protected $eventEntryFour;

    /**
     * ダミーデータ作成
     */
    public function setUp()
    {
        parent::setUp();

        $this->eventEntryOne = new EventEntry();
        $this->eventEntryOne->participation = 1;

        $this->eventEntryTwo = new EventEntry();
        $this->eventEntryTwo->participation = 2;

        $this->eventEntryThree = new EventEntry();
        $this->eventEntryThree->participation = 3;

        $this->eventEntryFour = new EventEntry();
        $this->eventEntryFour->participation = 4;
    }

    /**
     * エントリーマークテスト
     * @test
     */
    public function testEntryMark()
    {
        $result = new HtmlString(
            '<span class="glyphicon ev-ans ev-ok glyphicon-ok-sign" aria-hidden="true"></span>'
        );
        $this->assertEquals($result, $this->eventEntryOne->entryMark());

        $result = new HtmlString(
            '<span class="glyphicon ev-ans ev-q glyphicon-question-sign" aria-hidden="true"></span>'
        );
        $this->assertEquals($result, $this->eventEntryTwo->entryMark());

        $result = new HtmlString(
            '<span class="glyphicon ev-ans ev-ng glyphicon-remove-sign" aria-hidden="true"></span>'
        );
        $this->assertEquals($result, $this->eventEntryThree->entryMark());

        $result = 'エラーです';
        $this->assertEquals($result, $this->eventEntryFour->entryMark());
    }
}