<?php

namespace Database\Factories;

use App\Models\ServiceProviderQuote;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServiceProviderQuoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ServiceProviderQuote::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'service_provider_profile_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'property_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'months' => $this->faker->randomDigit(),
            'weeks' => $this->faker->randomDigit(),
            'days' => $this->faker->randomDigit(),
            'cost' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 5000),
            'service_provider_quote_item_id' => $this->faker->numberBetween($min = 1, $max = 17),
        ];
    }
}
