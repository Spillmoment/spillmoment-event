<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{

    public function run()
    {
        DB::table('products')->insert([

            // Makanan
            [
                'category_id' => 1,
                'vendor_id' => 1,
                'code' => 'product-' . rand(1, 1000000),
                'name' => 'Sate Ayam Konoha',
                'slug' => 'sate-ayam-konoha',
                'description' => 'Sate ayam terenak dengan bumbu kacang rahasia dari desa konoha',
                'photos' => 'sate.jpg',
                'price' => 850.000,
                'discount' => 0,
                'stock' => 10,
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            // Minuman
            [
                'category_id' => 2,
                'vendor_id' => 2,
                'code' => 'product-' . rand(1, 1000000),
                'name' => 'Wine Red',
                'slug' => 'wine-red',
                'description' => 'Wine merah adalah sebuah jenis minuman wine yang terbuat dari varietas wine berwarna tua. Warna minuman wine yang sebenarnya dapat berupa violat, biasanya dari wine muda, selain merah bata pada wine dewasa dan coklat pada wine merah tua.',
                'photos' => 'wine.jpg',
                'price' => 500.000,
                'discount' => 0,
                'stock' => 3,
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            // Makanan
            [
                'category_id' => 1,
                'vendor_id' => 2,
                'code' => 'product-' . rand(1, 1000000),
                'name' => 'Ramen Ichiraku',
                'slug' => 'ramen-ichiraku',
                'description' => 'Ramen Ichiraku adalah ramen dengan perpaduan rempah-rempah yang kuat disertai topping yang bervariasi seperti babi, ayam, sapi yang diambil langsung dari gunung myoboku',
                'photos' => 'ramen.jpg',
                'price' => 850.000,
                'discount' => 0,
                'stock' => 10,
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            // Minuman
            [
                'category_id' => 2,
                'vendor_id' => 2,
                'code' => 'product-' . rand(1, 1000000),
                'name' => 'Boba Segar',
                'slug' => 'boba-segar',
                'description' => 'Boba segar adalah minuman dengan fregmentasi bagus untuk kesahatan',
                'photos' => 'minuman1.jpeg',
                'price' => 30.000,
                'discount' => 0,
                'stock' => 3,
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            // Make Over
            [
                'category_id' => 3,
                'vendor_id' => 3,
                'code' => 'product-' . rand(1, 1000000),
                'name' => 'Make Over Cosmetics',
                'slug' => 'Make Over',
                'description' => 'Make Over Cosmetics adalah kosmetik profesional dengan rangkaian warna, tekstur, dan fungsi yang lengkap untuk setiap kategori produk',
                'photos' => 'makeover.jpg',
                'price' => 700.000,
                'discount' => 0,
                'stock' => 3,
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            // Dekorasi
            [
                'category_id' => 4,
                'vendor_id' => 4,
                'code' => 'product-' . rand(1, 1000000),
                'name' => 'Dekorasi Konoha',
                'slug' => 'dekorasi-konoha',
                'description' => 'Dekorasi dengan system ala-ala pernikahan shinobi desa konoha dengan nilai seni dunia ninja yang sangat kental di dalamnya',
                'photos' => 'dekorasi.jpg',
                'price' => 500.000,
                'discount' => 0,
                'stock' => 3,
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            // Fotografer
            [
                'category_id' => 5,
                'vendor_id' => 4,
                'code' => 'product-' . rand(1, 1000000),
                'name' => 'Fotografer Estetik',
                'slug' => 'fotografer-estetik',
                'description' => 'Jasa Fotografer estetik yang sangat populer dan banyak diminati para kalangan kaum muda',
                'photos' => 'fotografer.png',
                'price' => 800.000,
                'discount' => 0,
                'stock' => 3,
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],


        ]);
    }
}
