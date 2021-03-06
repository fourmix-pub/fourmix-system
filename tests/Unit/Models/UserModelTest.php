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
    protected $project;
    protected $daily;
    protected $user;

    public function setUp()
    {
        parent::setUp();

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
        $result = $this->user->sumByWorkType()->first();

        $this->assertTrue($result instanceof Daily);
        $this->assertEquals($result->work_type_id, 2);
        $this->assertEquals($result->sum_time, 5);
        $this->assertEquals($result->sum_cost, 10000);
    }

    public function testSumByProject()
    {
        $result = $this->user->sumByProject()->first();

        $this->assertTrue($result instanceof Daily);
        $this->assertEquals($result->project_id, 30000);
        $this->assertEquals($result->sum_time, 5);
        $this->assertEquals($result->sum_cost, 10000);
    }
}
