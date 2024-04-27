<?php

namespace Database\Factories;

use App\Models\Metric;
use Illuminate\Database\Eloquent\Factories\Factory;

class MetricHistoryFactory extends Factory
{
    protected $model = \App\Models\MetricHistory::class;

    public function definition()
    {
        return [
            'metric_id' => Metric::factory(),
            'value' => $this->faker->randomFloat(2, 80, 100),
            'recorded_at' => $this->faker->dateTimeThisYear()
        ];
    }
}
