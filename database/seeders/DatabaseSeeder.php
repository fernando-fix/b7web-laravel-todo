<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Task;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Usando o Seeder
        // $this->call([
        //     UserSeeder::class,
        //     CategorySeeder::class,
        //     TaskSeeder::class
        // ]);

        // Usando as factories
        User::factory(10)->create();
        Category::factory(10)->create();
        Task::factory(25)->create();
    }
}
