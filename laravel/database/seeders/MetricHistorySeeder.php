<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MetricHistorySeeder extends Seeder
{
    public function run()
    {
        \App\Models\MetricHistory::factory(1000)->create();
    }
}
