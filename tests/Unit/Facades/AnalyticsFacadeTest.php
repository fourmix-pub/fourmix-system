<?php

namespace Tests\Unit\Facades;

use App\Models\Daily;
use App\Models\PersonalBudget;
use App\Models\Project;
use App\User;
use Illuminate\Support\Facades\Facade;
use Tests\TestCase;
use Analytics;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AnalyticsFacadeTest extends TestCase
{
    /**
     * テスト用ダミーデータ
     * @var
     */
    private $project, $daily, $user, $personalBudget;

    /**
     * @before
     */
    public function create_test_data()
    {
        $this->project = factory(Project::class)->create([
            'id' => 30000,
            'budget' => 10000,
        ]);

        $this->user = factory(User::class)->create([
            'id' => 20000,
        ]);

        $this->daily = factory(Daily::class)->create([
            'project_id' => 30000,
            'user_id' => 20000,
            'cost' => 3000,
        ]);

        $this->personalBudget = factory(PersonalBudget::class)->create([
            'project_id' => 30000,
            'user_id' => 20000,
            'budget' => 5000,
        ]);
    }

    /**
     * ProjectAnalyticsTools::balanceBudget メソッドテスト
     * @test
     */
    public function testBalanceBudget()
    {
        $result = Analytics::balanceBudget($this->project);
        $this->assertEquals(7000, $result);
    }

    /**
     * ProjectAnalyticsTools::balanceBudgetRate メソッドテスト
     * @test
     */
    public function testBalanceBudgetRate(){
        $result = Analytics::balanceBudgetRate($this->project);
        $this->assertEquals(70, $result);
    }

    /**
     * ProjectAnalyticsTools::balancePersonalBudget メソッドテスト
     * @test
     */
    public function testBalancePersonalBudget()
    {
        $result = Analytics::balancePersonalBudget($this->project,
            $this->project->users()->where('user_id', $this->user->id)->first());

        $this->assertEquals(2000, $result);
    }

    /**
     * ProjectAnalyticsTools::balancePersonalBudgetRate メソッドテスト
     * @test
     */
    public function testBalancePersonalBudgetRate()
    {
        $result = Analytics::balancePersonalBudgetRate($this->project,
                $this->project->users()->where('user_id', $this->user->id)->first());
    }


    public function testAnalyticsFacadeClass()
    {
        $instance = new Analytics();
        $this->assertTrue($instance instanceof Facade);
        $this->assertEquals(Analytics::getFacadeAccessor(), 'analytics');
    }
}
