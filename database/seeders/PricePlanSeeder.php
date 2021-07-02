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
        //investors
        PricePlan::insert(
            [
                ['name' => 'Individual Report', 'period' => 'once-off', 'cost' => '1000', 'type' => 'investor'],
                ['name' => 'Premium Account', 'period' => 'monthly', 'cost' => '4000', 'type' => 'investor'],
            ]
        );

        //brokers - listing packages
        PricePlan::insert(
            [
                ['name' => 'Basic', 'period' => 'once-off', 'cost' => '1000', 'type' => 'broker'],
                ['name' => 'Premium', 'period' => 'monthly', 'cost' => '1800', 'type' => 'broker'],
                ['name' => 'Team', 'period' => 'monthly', 'cost' => '20000', 'type' => 'broker'],
                ['name' => 'Enterprise', 'period' => 'monthly', 'cost' => '0', 'type' => 'broker'],
            ]
        );
    }
}
