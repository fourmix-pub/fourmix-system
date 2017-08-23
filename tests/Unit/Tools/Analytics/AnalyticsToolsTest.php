<?php

namespace Tests\Unit\Tools\Analytics;

use App\Models\PersonalBudget;
use App\Tools\Analytics\AnalyticsTools;
use App\User;
use Tests\TestCase;
use App\Models\Daily;
use App\Models\Project;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AnalyticsToolsTest extends TestCase
{
    /**
     * テスト用ダミーデータ
     * @var
     */
    private $project, $daily, $user, $personalBudget;

    /**
     * AnalyticsToolsクラス
     * @var
     */
    private $analyticsTools;

    /**
     * @before
     */
    public function create_test_data()
    {
        $this->project = factory(Project::class)->create([
            'id'     => 30000,
            'budget' => 10000,
        ]);

        $this->user = factory(User::class)->create([
            'id' => 20000,
        ]);

        $this->daily = factory(Daily::class)->create([
            'project_id' => 30000,
            'user_id'    => 20000,
            'cost'       => 3000,
        ]);

        $this->personalBudget = factory(PersonalBudget::class)->create([
            'project_id' => 30000,
            'user_id'    => 20000,
            'budget'     => 5000,
        ]);

        $this->analyticsTools = new AnalyticsTools();
    }

    /**
     * ProjectAnalyticsTools::balanceBudget メソッドテスト
     * @test
     */
    public function testBalanceBudget()
    {
        $result = $this->analyticsTools->balanceBudget($this->project);
        $this->assertEquals(7000, $result);
    }

    /**
     * ProjectAnalyticsTools::balanceBudgetRate メソッドテスト
     * @test
     */
    public function testBalanceBudgetRate()
    {
        $result = $this->analyticsTools->balanceBudgetRate($this->project);
        $this->assertEquals(70, $result);
    }

    /**
     * ProjectAnalyticsTools::balancePersonalBudget メソッドテスト
     * @test
     */
    public function testBalancePersonalBudget()
    {
        $result = $this->analyticsTools->balancePersonalBudget($this->project,
            $this->project->users()->where('user_id', $this->user->id)->first());

        $this->assertEquals(2000, $result);
    }

    /**
     * ProjectAnalyticsTools::balancePersonalBudgetRate メソッドテスト
     * @test
     */
    public function testBalancePersonalBudgetRate()
    {
        $result = $this->analyticsTools
            ->balancePersonalBudgetRate($this->project,
                $this->project->users()->where('user_id', $this->user->id)->first());
    }
}
