<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            HostSeeder::class,
            MetricSeeder::class,
            MetricHistorySeeder::class,
            ItemSeeder::class,
        ]);
    }
}
