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

        for ($i = 1; $i < 7; $i++) {
            for ($j = 1; $j < 6; $j++) {
                App\Models\PersonalBudget::create([
                    'project_id' => $i,
                    'user_id'    => $j,
                    'budget'     => rand(200000, 500000),
                ]);
            }
        }
    }
}
