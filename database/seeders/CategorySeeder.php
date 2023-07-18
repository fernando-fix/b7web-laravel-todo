<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'title' => 'Alta prioridade',
                'color' => '#ff0000',
                'user_id' => 1
            ],
            [
                'title' => 'Média prioridade',
                'color' => '#ffff00',
                'user_id' => 1
            ],
            [
                'title' => 'Baixa prioridade',
                'color' => '#00ff00',
                'user_id' => 1
            ],
            [
                'title' => 'Errado',
                'color' => '#ff0000',
                'user_id' => 2
            ],
            [
                'title' => 'Certo',
                'color' => '#00ff00',
                'user_id' => 2
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
