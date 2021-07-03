<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Property::factory(10)->create();
        \App\Models\BrokerProfile::factory(10)->create();
        \App\Models\ServiceProviderProfile::factory(10)->create();
        \App\Models\ServiceProviderQuote::factory(50)->create();
        \App\Models\FeaturedProperty::factory(10)->create();

        $this->call([
            PropertyStatusSeeder::class,
            MenuLocationsSeeder::class,
            PricePlanItemsSeeder::class,
            PricePlanSeeder::class,
            ServiceProviderTypeSeeder::class,
            ServiceProviderQuoteCategorySeeder::class,
            ServiceProviderQuoteItemSeeder::class,
        ]);
    }
}
