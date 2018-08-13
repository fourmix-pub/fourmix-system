<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Support\HtmlString;

class EventEntry extends Pivot
{
    /**
     * ユーザーの出席状況に合わせたマークを表示
     * @return HtmlString|string
     */
    public function entryMark()
    {
        switch ($this->participation) {
            case 1:
                return new HtmlString(
                    '<span class="glyphicon ev-ans ev-ok glyphicon-ok-sign" aria-hidden="true"></span>'
                );
                break;

            case 2:
                return new HtmlString(
                    '<span class="glyphicon ev-ans ev-q glyphicon-question-sign" aria-hidden="true"></span>'
                );
                break;

            case 3:
                return new HtmlString(
                    '<span class="glyphicon ev-ans ev-ng glyphicon-remove-sign" aria-hidden="true"></span>'
                );
                break;

            default:
                return 'エラーです';
                break;
        }
    }

    /**
     * 更新日時定義
     * @return string
     */
    public function getUpdatedAtColumn()
    {
        return 'updated_at';
    }
}