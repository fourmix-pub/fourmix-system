<?php

namespace Tests\Unit\Providers;

use App\Tools\Analytics\AnalyticsTools;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ToolServiceTest extends TestCase
{
    /**
     * ツールサービスバインドテスト
     * @test
     */
    public function test_tool_bind()
    {
        $instance = app('analytics');
        $this->assertBind($instance,AnalyticsTools::class);
    }
}
