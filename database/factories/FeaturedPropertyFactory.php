<?php

namespace Database\Factories;

use App\Models\FeaturedProperty;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeaturedPropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FeaturedProperty::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'property_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'order_number' => $this->faker->numberBetween($min = 1, $max = 10),
        ];
    }
}
