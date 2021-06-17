<?php

namespace Database\Factories;

use App\Models\ServiceProviderProfile;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServiceProviderProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ServiceProviderProfile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->company();
        return [
            'company_name' => $name,
            'slug' => Str::of($name)->slug('-'),
            'logo' => $this->faker->imageUrl($width = 640, $height = 480, 'logo'),
        ];
    }
}
