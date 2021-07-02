<?php

namespace Database\Factories;

use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Property::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'erf_size' => $this->faker->numberBetween($min = 1, $max = 1000),
            'levies' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 5000, $max = 15000),
            'rates_and_taxes' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 5000, $max = 15000),
            'age' => $this->faker->randomDigit(),
            'house_size' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'bedrooms' => $this->faker->randomDigit(),
            'toilets' => $this->faker->randomDigit(),
            'bathrooms' => $this->faker->randomDigit(),
            'closed_parking' => $this->faker->randomDigit(),
            'street_parking' => $this->faker->randomDigit(),
            'address_id' => $this->faker->numberBetween($min = 1, $max = 1000),
            'property_status_id' => $this->faker->numberBetween($min = 1, $max = 4),
            'views' => $this->faker->randomDigit(),
            'property_type' => $this->faker->numberBetween($min = 1, $max = 5),
            'estimation' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 5000, $max = 15000),
            'price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 5000, $max = 15000),
        ];
    }
}
