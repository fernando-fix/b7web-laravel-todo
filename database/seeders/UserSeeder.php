<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Fernando de Lima Rodrigues',
                'email' => 'fernando@email.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Joaquim da Silva Santos',
                'email' => 'joaquim@email.com',
                'password' => Hash::make('123456'),
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
