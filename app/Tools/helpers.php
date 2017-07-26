<?php
use Illuminate\Support\Collection;

if (! function_exists('bg_img')) {
    function bg_img()
    {
        return Collection::make([
            'img/concept.jpg',
            'img/creative.jpg',
            'img/system.jpg',
            'img/support.jpg',
        ])->random();
    }
}