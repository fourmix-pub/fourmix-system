<?php

use Illuminate\Database\Seeder;

class SafetyConfirmationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\SafetyConfirmation::class, 30)->create();
    }
}
