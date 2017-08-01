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
            'id' => 1,
            'name'   => 'Admin',
            'email'    => 'fourmix-system@fourmix.co.jp',
            'password' => bcrypt('123456'),
            'department_id' => 1,
            'unit_cost' => 20,
            'started_time' => '09:30:00',
            'ended_time' => '18:30:00',
            'resignation_flag' => 0,
        ]);
    }
}
