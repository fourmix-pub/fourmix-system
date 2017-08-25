<?php

namespace Tests\Unit\Models;

use App\Models\Daily;
use App\Models\PersonalBudget;
use App\Models\Project;
use App\User;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProjectModelTest extends TestCase
{
    /**
     * テスト用ダミーデータ
     * @var
     */
    protected $project;
    protected $daily;
    protected $user;
    protected $personalBudget;

    /**
     * @before
     */
    public function create_test_data()
    {
        $this->project = factory(Project::class)->create([
            'id' => 30000,
        ]);

        $this->daily = factory(Daily::class)->create([
            'project_id' => 30000,
            'user_id' => 20000,
            'work_type_id' => 2,
            'time' => 5,
            'cost' => 10000,
        ]);

        $this->user = factory(User::class)->create([
            'id' => 20000,
        ]);

        $this->project->users()->attach($this->user, ['budget' => 100000]);
    }

    public function testSumByWorkType()
    {
        $result = $this->project->sumByWorkType()->get()->first();

        $this->assertTrue($result instanceof Daily);
        $this->assertEquals($result->work_type_id, 2);
        $this->assertEquals($result->sum_time, 5);
        $this->assertEquals($result->sum_cost, 10000);
    }

    public function testSumByUser()
    {
        $result = $this->project->sumByUser()->get()->first();

        $this->assertTrue($result instanceof Daily);
        $this->assertEquals($result->user_id, 20000);
        $this->assertEquals($result->sum_time, 5);
        $this->assertEquals($result->sum_cost, 10000);
    }

    public function testSumByCostPersonal()
    {
        $result = $this->project->sumByCostPersonal($this->project->id, $this->user->id);
        $this->assertEquals($result->sum_cost, 10000);
    }

    public function testBudgetFilter()
    {
        $result = $this->project->budgetFilter($this->user->id)->first();
        $this->assertTrue($result instanceof User);
        $this->assertEquals($result->id, $this->user->id);
    }

    public function testSumByCost()
    {
        $result = $this->project->sumByCost($this->project->id);
        $this->assertEquals($result->sum_cost, 10000);
    }
}
