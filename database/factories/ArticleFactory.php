<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $sentence = $this->faker->sentence();
        return [
            'title' => $sentence,
            'content' => $this->faker->text(),
            'excerpt' => $sentence,
            'column_id' => $this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10])
        ];
    }
}
