<?php

namespace Database\Factories;

use App\Models\Host;
use Illuminate\Database\Eloquent\Factories\Factory;

class MetricFactory extends Factory
{
    protected $model = \App\Models\Metric::class;

    public function definition()
    {
        return [
            'host_id' => Host::factory(),
            'metric_type' => $this->faker->randomElement(['CPU', 'Memory', 'Disk Usage']),
            'value' => $this->faker->randomFloat(2, 80, 100)
        ];
    }
}
