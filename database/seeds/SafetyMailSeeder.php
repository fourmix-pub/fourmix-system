<?php

use Illuminate\Database\Seeder;

class SafetyMailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\SafetyMail::class, 12)->create();
    }
}
