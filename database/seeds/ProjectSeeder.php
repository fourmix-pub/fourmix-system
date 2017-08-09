<?php

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->delete();

        for ($i = 1; $i < 31; $i++) {
            App\Models\Project::create([
                'name' => 'プロジェクト'.$i,
                'customer_id' => $i,
                'cost' => rand(200000, 500000),
                'budget' => rand(200000, 500000),
                'user_id' => $i,
                'start' => '2017-10-12',
                'end' => '2017-11-12',
                'end_expect' => '2017-12-12',
                'note' => str_random(50),
                'can_display' => rand(0, 1),
            ]);
        }
    }
}
