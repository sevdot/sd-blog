<?php

namespace Database\Seeders;

use App\Models\Milestone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MilestonesSeeder extends Seeder
{

    public function run()
    {
        Milestone::factory()->count(100)->create();
    }
}
