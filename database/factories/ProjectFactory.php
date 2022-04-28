<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ProjectFactory extends Factory
{
    public function definition()
    {
        return [
            'name'=>$this->faker->sentence(),
            'description'=>$this->faker->text(),
            'cover'=>$this->faker->imageUrl()
        ];
    }
}
