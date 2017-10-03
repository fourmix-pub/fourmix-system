<?php

use Illuminate\Support\Collection;
use App\Models\Daily;

if (! function_exists('bg_img')) {
    function bg_img()
    {
        return Collection::make([
            '/img/concept.jpg',
            '/img/creative.jpg',
            '/img/system.jpg',
            '/img/support.jpg',
        ])->random();
    }
}

if (! function_exists('start_time')) {
    function start_time($dailies, $date)
    {
        if ($dailies->isEmpty()) {
            return '';
        } else {
            return Daily::where('date', $date)->where('user_id', $dailies->first()->user_id)->latest()->first()->end;
        }
    }
}
