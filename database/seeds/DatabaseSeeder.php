<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(WorkTypeSeeder::class);
        $this->call(JobTypeSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(DailySeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(PersonalBudgetSeeder::class);
        factory(\App\Models\SafetyMail::class, 10)->create();
    }
}
