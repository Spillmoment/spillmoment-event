<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VendorSeeder extends Seeder
{

    public function run()
    {
        DB::table('vendors')->insert([
            [
                'user_id' => 1,
                'name' => 'Koridor.id',
                'slug' => 'koridor.id',
                'description' => 'lorem ipsum dolor sit atmet',
                'photo' => 'vendor1.jpg',
                'whatsapp' => '085236667889',
                'instagram' => '@koridor',
                'address' => 'Probolinggo',
                'link' => 'tiktok.com',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 1,
                'name' => 'mentoo',
                'slug' => 'mentoo',
                'description' => 'lorem ipsum dolor sit atmet',
                'photo' => 'vendor2.jpg',
                'whatsapp' => '083436667889',
                'instagram' => '@mentoo',
                'address' => 'Probolinggo',
                'link' => 'tiktok.com',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 1,
                'name' => 'cybernet',
                'slug' => 'cybernet',
                'description' => 'lorem ipsum dolor sit atmet',
                'photo' => 'vendor3.jpg',
                'whatsapp' => '085236667789',
                'instagram' => '@cybernet',
                'address' => 'Probolinggo',
                'link' => 'tiktok.com',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
