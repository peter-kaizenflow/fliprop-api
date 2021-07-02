<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceProviderQuoteCategory;

class ServiceProviderQuoteCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceProviderQuoteCategory::insert(
            [
                ['name' => 'Kitchen'],
                ['name' => 'Bathroom'],
                ['name' => 'General'],
            ]
            );
    }
}
