<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Speaker;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\EventCategory;

class SpeakerSeeder extends Seeder
{

    public function run()
    {
        Speaker::factory()
            ->count(25)
            ->state(new Sequence(
                fn ($sequence) => ['position' => EventCategory::all()->random()],
            ))
            ->create();
    }
}
