<?php

namespace App\Tools;

use Illuminate\Support\Facades\Facade;

class Analytics extends Facade
{
    /**
     * IoCに移管
     * 実体：App\Tools\Analytics\AnalyticsTools
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'analytics';
    }
}
