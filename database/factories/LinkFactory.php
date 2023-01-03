<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class LinkFactory extends Factory
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
            'name' => $this->faker->lastName,
            'logo' => $this->faker->imageUrl(200,200),
            'describe' => $sentence,
            'url' => $this->faker->url,
            'status' => $this->faker->randomElement([0,1,2])
        ];
    }
}
