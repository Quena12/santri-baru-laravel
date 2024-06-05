<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        $userData = [
            'name' => 'Yusuf Pria',
            'email' => 'yusuf@gmail.com',
            'password' => Hash::make('ponpes1'),
        ];

        User::create($userData);
    }
}