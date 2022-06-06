<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            [
                'name' => 'User Testing',
                'email' => 'user@test.com',
                'phone' => '085236639887',
                'gender' => 'pria',
                'password' => bcrypt('akudewe')
            ],
            [
                'name' => 'Uchiha Madara',
                'email' => 'madara@test.com',
                'phone' => '085236639888',
                'gender' => 'pria',
                'password' => bcrypt('akudewe')
            ],
            [
                'name' => 'Gojo Satorou',
                'email' => 'gojo@test.com',
                'phone' => '085236639187',
                'gender' => 'pria',
                'password' => bcrypt('akudewe')
            ],
            [
                'name' => 'Deddy Sujar',
                'email' => 'deddy@test.com',
                'phone' => '085216639887',
                'gender' => 'pria',
                'password' => bcrypt('akudewe')
            ],

        ]);
    }
}
