<?php

namespace Tests\Unit\Models;

use App\Models\Daily;
use App\Models\Project;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserModelTest extends TestCase
{
    protected $project, $daily, $user;

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
    }

    public function testSumByWorkType()
    {
        $result = $this->user->sumByWorkType()->get()->first();

        $this->assertTrue($result instanceof Daily);
        $this->assertEquals($result->work_type_id, 2);
        $this->assertEquals($result->sum_time, 5);
        $this->assertEquals($result->sum_cost, 10000);
    }

    public function testSumByProject()
    {
        $result = $this->user->sumByProject()->get()->first();

        $this->assertTrue($result instanceof Daily);
        $this->assertEquals($result->project_id, 30000);
        $this->assertEquals($result->sum_time, 5);
        $this->assertEquals($result->sum_cost, 10000);
    }
}
