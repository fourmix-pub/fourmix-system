<?php

use Illuminate\Database\Seeder;

class WorkTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('work_types')->delete();

        for ($i = 1; $i < 21; $i++) {
            \App\Models\WorkType::create([
                'name' => '作業'.$i,
            ]);
        }
    }
}
