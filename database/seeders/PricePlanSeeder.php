<?php

namespace Database\Seeders;

use App\Models\PricePlan;
use Illuminate\Database\Seeder;

class PricePlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PricePlan::insert(
            [
                ['name' => 'Individual Report', 'period' => 'once-off', 'cost' => '1000', 'type' => 'investor'],
                ['name' => 'Premium Account', 'period' => 'monthly', 'cost' => '4000', 'type' => 'investor'],
            ]
        );
    }
}
