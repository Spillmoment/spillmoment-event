<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => 'User Testing',
            'email' => 'user@test.com',
            'phone' => '085236639887',
            'gender' => 'pria',
            'password' => bcrypt('akudewe')
        ];
        User::create($user);
    }
}
