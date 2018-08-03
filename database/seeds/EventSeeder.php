<?php

class EventSeeder extends Seeder
{
    /**
     * seedする
     */
    public function run()
    {
        factory(\App\Note::class, 5)->create();

    }
}