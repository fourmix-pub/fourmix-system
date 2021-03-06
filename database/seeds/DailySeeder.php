<?php

use Illuminate\Database\Seeder;

class DailySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dailies')->delete();

        for ($i = 1; $i <= 30; $i++) {
            \App\Models\Daily::create([
                'user_id' => $i,
                'work_type_id' => $i,
                'job_type_id' => rand(1, 3),
                'project_id' => $i,
                'date' => '2017-10-08',
                'start' => '09:00:00',
                'end' => '18:30:00',
                'rest' => 60,
                'time' => 8.5,
                'cost' => rand(2500, 50000),
                'note' => 'テストテストテストテスト',
            ]);
        }
    }
}
