<?php

namespace Database\Factories;

use App\Models\Host;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    protected $model = \App\Models\Item::class;

    public function definition()
    {
        $pingPercentage = $this->faker->numberBetween(80, 100);
        $isOnline = $pingPercentage > 90;
        return [
            'host_id' => Host::factory(),
            'ping_percentage' => $pingPercentage,
            'is_online' => $isOnline
        ];
    }
}
