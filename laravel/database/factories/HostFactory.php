<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HostFactory extends Factory
{
    protected $model = \App\Models\Host::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'ip_address' => $this->faker->unique()->ipv4
        ];
    }
}
