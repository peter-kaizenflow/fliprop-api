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
        PricePlanItem::insert(
            [
                ['price_plan_id' => '1', 'item' => 'Download one report'],
                ['price_plan_id' => '2', 'item' => 'Get site wide access to all reports'],
            ]
        );
    }
}
