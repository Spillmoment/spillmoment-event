<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpillmomentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spillmoments')->insert([
            [
                'vendor_id' => 1,
                'title' => 'Momen Wisuda Mahasiswa Informatika',
                'slug' => 'momen-wisuda-mahasiswa-informatika',
                'description' => 'Momen Wisuda Mahasiswa Informatika Di Desa Konoha',
                'image' => 'momen1.jpg',
                'link' => 'tiktok.com',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'vendor_id' => 2,
                'title' => 'Momen Pernikahan Naruto & Hinata',
                'slug' => 'momen-pernikahan-naruto-hinata',
                'description' => 'Momen Pernikahan Naruto & Hinata Di Desa Konoha',
                'image' => 'momen2.jpg',
                'link' => 'tiktok.com',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'vendor_id' => 3,
                'title' => 'Momen Pernikahan Deddy & Fiona',
                'slug' => 'momen-pernikahan-deddy-fiona',
                'description' => 'Momen Pernikahan Deddy & Fiona Di Desa Konoha',
                'image' => 'momen3.jpeg',
                'link' => 'tiktok.com',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
