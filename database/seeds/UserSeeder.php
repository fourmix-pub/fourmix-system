<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Event;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::fake();
        DB::table('events')->delete();
        App\Events::create([
            'title'   => '藍上さん結婚お祝いパーティー',
            'contents'    => '藍上さんのご結婚を祝って、みんなで楽しく飲みましょう。',
            'location' => 'T.Y.HARVOR',
        ]);

        for ($i = 0; $i < 30; $i++) {
            App\Events::create([
                'title'   => str_random(10),
                'contents'    => str_random(100),
                'locaton' => str_random(50),
            ]);
        }
    }
}
