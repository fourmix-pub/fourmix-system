<?php

use Illuminate\Database\Seeder;

class PersonalBudgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personal_budgets')->delete();

        for ($i = 0; $i < 30; $i++) {
            App\Models\PersonalBudget::create([
                'project_id'   => rand(1, 30),
                'user_id'    => rand(1, 30),
                'budget' => rand(200000, 500000),
            ]);
        }
    }
}