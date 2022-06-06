<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call([
            AdminSeeder::class,
            EventCategorySeeder::class,
            SpeakerSeeder::class,
            PartnerSeeder::class,
            EventSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            VendorSeeder::class,
            ProductSeeder::class,
            SpillmomentSeeder::class
        ]);
    }
}
