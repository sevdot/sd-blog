<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class MilestoneFactory extends Factory
{

    public function definition()
    {
        $projectIds = Project::pluck('id')->toArray();
        return [
            'project_id'=>$this->faker->randomElement($projectIds),
            'title'=>$this->faker->sentence(),
            'content'=>$this->faker->text()
        ];
    }
}
