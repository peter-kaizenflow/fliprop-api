<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PricePlanItem;

class PricePlanItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //investors
        PricePlanItem::insert(
            [
                ['price_plan_id' => '1', 'item' => 'Download one report'],
                ['price_plan_id' => '2', 'item' => 'Get site wide access to all reports'],
            ]
        );

        //brokers - listing packages
        PricePlanItem::insert(
            [
                ['price_plan_id' => '3', 'item' => '1 Listing'],
                ['price_plan_id' => '3', 'item' => 'Unlimited leads'],
                ['price_plan_id' => '3', 'item' => 'Online for 6 months'],
                ['price_plan_id' => '3', 'item' => 'Up to 15 photos'],
                ['price_plan_id' => '4', 'item' => '1 listing'],
                ['price_plan_id' => '4', 'item' => 'Unlimited leads'],
                ['price_plan_id' => '4', 'item' => 'Online for 6 months'],
                ['price_plan_id' => '4', 'item' => 'Up to 15 photos'],
                ['price_plan_id' => '4', 'item' => 'Featured listing'],
                ['price_plan_id' => '5', 'item' => '5 seats'],
                ['price_plan_id' => '5', 'item' => '10 listings per seat'],
                ['price_plan_id' => '5', 'item' => 'Unlimited leads'],
                ['price_plan_id' => '5', 'item' => 'Online for 6 months'],
                ['price_plan_id' => '5', 'item' => 'Up to 15 photos'],
                ['price_plan_id' => '6', 'item' => '5 Plus seats'],
                ['price_plan_id' => '6', 'item' => 'Custom number of listings'],
                ['price_plan_id' => '6', 'item' => 'Unlimited leads'],
            ]
        );
    }
}
