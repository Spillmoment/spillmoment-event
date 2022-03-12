<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{

    protected $partner = [
        [
            'name' => 'Pusdikom',
            'slug' => 'pusdikom',
            'address' => 'Probolinggo',
        ],
        [
            'name' => 'Koridor',
            'slug' => 'koridor',
            'address' => 'Surabaya'
        ],
    ];


    public function run()
    {

        foreach ($this->partner as $ps) {
            Partner::create($ps);
        }
    }
}
