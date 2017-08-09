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

        for ($i = 0; $i < 30; $i++) {
            App\Models\Project::create([
                'name' => 'プロジェクト'.$i,
                'customer_id' => rand(1, 21),
                'cost' => rand(200000, 500000),
                'budget' => rand(200000, 500000),
                'user_id' => rand(1, 31),
                'start' => '2017-10-12',
                'end' => '2017-11-12',
                'end_expect' => '2017-12-12',
                'note' => str_random(50),
                'can_display' => rand(0, 1),
            ]);
        }
    }
}
