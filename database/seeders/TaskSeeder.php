<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            [
                'title' => 'Tarefa importante',
                'description' => 'Coisas muito importantes para fazer',
                'due_date' => '2023-07-17',
                'user_id' => 1,
                'category_id' => 1
            ],
            [
                'title' => 'Tarefa de importância média',
                'description' => 'Coisas mais ou menos legais',
                'due_date' => '2023-07-17',
                'user_id' => 1,
                'category_id' => 2
            ],
            [
                'title' => 'Tarefa não tão importante',
                'description' => 'Coisas menores para fazer',
                'due_date' => '2023-07-17',
                'user_id' => 1,
                'category_id' => 3
            ],
            [
                'title' => 'Tarefa só do Joaquim',
                'description' => 'Esta é uma tarefa que somente o Joaquim pode fazer',
                'due_date' => '2023-07-17',
                'user_id' => 2,
                'category_id' => 5
            ]
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
