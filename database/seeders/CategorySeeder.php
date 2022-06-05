<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'name' => 'Busana & Pakaian',
                'slug' => 'busana-pakaian',
                'image' => 'noimage.png'
            ],

            [
                'name' => 'Makanan & Catering',
                'slug' => 'makanan-catering',
                'image' => 'noimage.png'
            ]
        ]);
    }
}
