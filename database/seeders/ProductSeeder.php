<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{

    public function run()
    {
        DB::table('products')->insert([
            [
                'category_id' => 2,
                'vendor_id' => 1,
                'code' => 'product-' . rand(10, 100),
                'name' => 'Prasmanan Rendang & Sambal Kentang',
                'slug' => 'prasmanan-rendang-sambal-kentang',
                'description' => 'lorem ipsum dolor sit atmet',
                'photos' => 'product1.jpg',
                'price' => 850.000,
                'discount' => 0,
                'stock' => 10,
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 1,
                'vendor_id' => 1,
                'code' => 'product-' . rand(10, 100),
                'name' => 'Gaun Pernikahan',
                'slug' => 'gaun-pernikahan',
                'description' => 'lorem ipsum dolor sit atmet',
                'photos' => 'product2.jpg',
                'price' => 900.000,
                'discount' => 0,
                'stock' => 3,
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 1,
                'vendor_id' => 1,
                'code' => 'product-' . rand(10, 100),
                'name' => 'Product 3',
                'slug' => 'product-3',
                'description' => 'lorem ipsum dolor sit atmet',
                'photos' => 'product3.jpg',
                'price' => 900.000,
                'discount' => 0,
                'stock' => 3,
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
