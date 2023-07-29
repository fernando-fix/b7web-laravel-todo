<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        /*
        // primeira solução
        $user = User::all()->random();
        while (count($user->categories) == 0) {
            $user = User::all()->random();
        }
        // depois usa assim pra pegar a categoria: $user->categories->random()
        */

        // melhor solução na minha opnião
        $category = Category::all()->random();
        $user = $category->user;

        return [
            //
            'is_done' => $this->faker->boolean(),
            'title' => $this->faker->text(30),
            'description' => $this->faker->text(50),
            'due_date' => $this->faker->dateTime(),
            'user_id' => $user,
            'category_id' => $category
        ];
    }
}
