<?php

namespace Database\Seeders;

use App\Models\Link;
use Illuminate\Database\Seeder;

class LinksSeeder extends Seeder
{

    public function run()
    {
        Link::factory()->count(100)->create();
    }
}
