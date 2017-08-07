<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        App\User::create([
            'name'   => 'Admin',
            'email'    => 'fourmix-system@fourmix.co.jp',
            'password' => bcrypt('123456'),
            'department_id' => 1,
            'unit_cost' => 20,
            'started_time' => '09:30:00',
            'ended_time' => '18:30:00',
            'resignation_flag' => 0,
        ]);

        for ($i = 0; $i < 30; $i++) {
            App\User::create([
                'name'   => str_random(10),
                'email'    => str_random(10).'@fourmix.co.jp',
                'password' => bcrypt('123456'),
                'department_id' => rand(1,3),
                'unit_cost' => 20,
                'started_time' => '09:30:00',
                'ended_time' => '18:30:00',
                'resignation_flag' => rand(0,1),
            ]);
        }
    }
}