<?php

use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->delete();

        for ($i = 0; $i < 3; $i++) {
            \App\Models\Department::create([
                'name' => '部門'.$i,
            ]);
        }
    }
}