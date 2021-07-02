<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceProviderQuoteItem;

class ServiceProviderQuoteItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceProviderQuoteItem::insert(
            [
                ['service_provider_quote_item_category_id' => '1', 'name' => 'Stainless steel appliances', 'service_provider_type_id' => 2],
                ['service_provider_quote_item_category_id' => '1', 'name' => 'Installing new countertops', 'service_provider_type_id' => 2],
                ['service_provider_quote_item_category_id' => '1', 'name' => 'Painting or replacing cupboards', 'service_provider_type_id' => 2],
                ['service_provider_quote_item_category_id' => '1', 'name' => 'Updating the sink and faucet', 'service_provider_type_id' => 2],
                ['service_provider_quote_item_category_id' => '1', 'name' => 'Updating the flooring', 'service_provider_type_id' => 2],
                ['service_provider_quote_item_category_id' => '1', 'name' => 'Lighting', 'service_provider_type_id' => 2],
                ['service_provider_quote_item_category_id' => '2', 'name' => 'Replace the shower screens', 'service_provider_type_id' => 2],
                ['service_provider_quote_item_category_id' => '2', 'name' => 'Replace the taps', 'service_provider_type_id' => 2],
                ['service_provider_quote_item_category_id' => '2', 'name' => 'Replace the toilet', 'service_provider_type_id' => 2],
                ['service_provider_quote_item_category_id' => '2', 'name' => 'Replace the vanity', 'service_provider_type_id' => 2],
                ['service_provider_quote_item_category_id' => '2', 'name' => 'Resurface the bathtub', 'service_provider_type_id' => 2],
                ['service_provider_quote_item_category_id' => '2', 'name' => 'Paint or tile the walls', 'service_provider_type_id' => 2],
                ['service_provider_quote_item_category_id' => '3', 'name' => 'Interior painting', 'service_provider_type_id' => 2],
                ['service_provider_quote_item_category_id' => '3', 'name' => 'Exterior painting', 'service_provider_type_id' => 2],
                ['service_provider_quote_item_category_id' => '3', 'name' => 'Security fencing', 'service_provider_type_id' => 2],
                ['service_provider_quote_item_category_id' => '3', 'name' => 'Windows and doors replacement', 'service_provider_type_id' => 2],
                ['service_provider_quote_item_category_id' => '3', 'name' => 'Tiling', 'service_provider_type_id' => 2],
            ]
            );
    }
}
