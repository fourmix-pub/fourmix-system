<?php

namespace Tests\Unit\Providers;

use App\Contracts\Repositories\CustomerRepositoryContract;
use App\Contracts\Repositories\DailyRepositoryContract;
use App\Contracts\Repositories\DepartmentRepositoryContract;
use App\Contracts\Repositories\JobTypeRepositoryContract;
use App\Contracts\Repositories\PersonalBudgetRepositoryContract;
use App\Contracts\Repositories\ProjectRepositoryContract;
use App\Contracts\Repositories\UserRepositoryContract;
use App\Contracts\Repositories\WorkTypeRepositoryContract;
use App\Models\Customer;
use App\Models\Project;
use App\Repositories\CustomerRepository;
use App\Repositories\DailyRepository;
use App\Repositories\DepartmentRepository;
use App\Repositories\JobTypeRepository;
use App\Repositories\PersonalBudgetRepository;
use App\Repositories\ProjectRepository;
use App\Repositories\UserRepository;
use App\Repositories\WorkTypeRepository;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


/**
 * レポジトリサービスバインドテスト
 * Class RepositoryServiceTest
 * @package Tests\Unit\Providers
 */
class RepositoryServiceTest extends TestCase
{
    /**
     * @test
     */
    public function test_repository_bind()
    {
        $instance = app(UserRepositoryContract::class);
        $this->assertBind($instance,UserRepository::class);

        $instance = app(CustomerRepositoryContract::class);
        $this->assertBind($instance,CustomerRepository::class);

        $instance = app(WorkTypeRepositoryContract::class);
        $this->assertBind($instance, WorkTypeRepository::class);

        $instance = app(JobTypeRepositoryContract::class);
        $this->assertBind($instance, JobTypeRepository::class);

        $instance = app(DepartmentRepositoryContract::class);
        $this->assertBind($instance, DepartmentRepository::class);

        $instance = app(DailyRepositoryContract::class);
        $this->assertBind($instance, DailyRepository::class);

        $instance = app(ProjectRepositoryContract::class);
        $this->assertBind($instance, ProjectRepository::class);

        $instance = app(PersonalBudgetRepositoryContract::class);
        $this->assertBind($instance, PersonalBudgetRepository::class);
    }
}
