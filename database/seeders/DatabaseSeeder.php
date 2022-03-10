<?php

namespace Database\Seeders;

// use App\Models\cost_estimation;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        // \App\Models\cost_estimation::factory(10)->create();
        // \App\Models\CostestimationFactory::factory(10)->create();
       
    }
}
