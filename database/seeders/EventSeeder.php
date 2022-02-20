<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Sequence;

class EventSeeder extends Seeder
{

    public function run()
    {
        Event::factory()
            ->state(new Sequence(
                ['type' => 'paid'],
                ['type' => 'free'],

                ['status' => 'online'],
                ['status' => 'offline'],

            ))
            ->count(10)
            ->create();
    }
}
