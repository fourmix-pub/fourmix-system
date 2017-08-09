<?php

use Illuminate\Database\Seeder;

class JobTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_types')->delete();

        for ($i = 1; $i < 4; $i++) {
            \App\Models\JobType::create([
                'name' => '勤務'.$i,
                'unit_betting_rate' => 1.00,
            ]);
        }
    }
}
