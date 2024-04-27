<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HostSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Host::factory(1000)->create();
    }
}
