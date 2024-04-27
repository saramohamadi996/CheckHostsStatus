<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MetricSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Metric::factory(1000)->create();
    }
}
