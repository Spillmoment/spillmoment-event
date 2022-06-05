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
                'name' => 'Makanan',
                'slug' => 'makanan',
                'image' => 'makanan.jpg'
            ],
            [
                'name' => 'Minuman',
                'slug' => 'minuman',
                'image' => 'minuman.jpg'
            ],
            [
                'name' => 'Make Over',
                'slug' => 'make-over',
                'image' => 'makeover.jpg'
            ],
            [
                'name' => 'Dekorasi',
                'slug' => 'dekorasi',
                'image' => 'dekorasi.jpg'
            ],
            [
                'name' => 'Fotografer',
                'slug' => 'fotografer',
                'image' => 'fotografer.jpg'
            ]
    }
}
