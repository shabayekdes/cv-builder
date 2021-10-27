<?php

namespace Database\Seeders;

use App\Models\Experiance;
use Illuminate\Database\Seeder;

class ExperianceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Experiance::factory(30)->create();

    }
}
