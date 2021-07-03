<?php

namespace Database\Factories;

use App\Models\PopularSuburb;
use Illuminate\Database\Eloquent\Factories\Factory;

class PopularSuburbFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PopularSuburb::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'suburb' => $this->faker->city,
            'link' => $this->faker->imageUrl($width = 640, $height = 480, 'logo'),
            'image' => $this->faker->imageUrl($width = 640, $height = 480, 'logo'),
        ];
    }
}
