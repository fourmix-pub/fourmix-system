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
            'cost' => 20,
            'start' => '09:30:00',
            'end' => '18:30:00',
            'is_resignation' => 0,
        ]);

        for ($i = 0; $i < 30; $i++) {
            App\User::create([
                'name'   => str_random(10),
                'email'    => str_random(10).'@fourmix.co.jp',
                'password' => bcrypt('123456'),
                'department_id' => rand(1, 3),
                'cost' => 20,
                'start' => '09:30:00',
                'end' => '18:30:00',
                'is_resignation' => rand(0, 1),
            ]);
        }
    }
}
