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
                'name' => 'Koridor',
                'slug' => 'koridor',
                'description' => 'lorem ipsum dolor sit atmet',
                'photo' => 'koridor.jpg',
                'whatsapp' => '085236667889',
                'instagram' => '@koridor',
                'address' => 'Probolinggo',
                'link' => 'tiktok.com',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 2,
                'name' => 'Mentoo',
                'slug' => 'mentoo',
                'description' => 'lorem ipsum dolor sit atmet',
                'photo' => 'mentoo.jpg',
                'whatsapp' => '083436667889',
                'instagram' => '@mentoo',
                'address' => 'Lumajang',
                'link' => 'tiktok.com',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 3,
                'name' => 'Cybernet',
                'slug' => 'cybernet',
                'description' => 'lorem ipsum dolor sit atmet',
                'photo' => 'cybernet.jpg',
                'whatsapp' => '085236667789',
                'instagram' => '@cybernet',
                'address' => 'Malang',
                'link' => 'tiktok.com',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 4,
                'name' => 'Ambara',
                'slug' => 'ambara',
                'description' => 'lorem ipsum dolor sit atmet',
                'photo' => 'ambara.webp',
                'whatsapp' => '085236667789',
                'instagram' => '@cybernet',
                'address' => 'Jember',
                'link' => 'tiktok.com',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
