<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->delete();

        for ($i = 1; $i <= 10; $i++) {
            \App\Models\Customer::create([
                'name' => '企業'.$i,
                'type_id' => 1,
            ]);
        }

        for ($i = 11; $i <= 20; $i++) {
            \App\Models\Customer::create([
                'name' => '企業'.$i,
                'type_id' => 2,
            ]);
        }
    }
}
