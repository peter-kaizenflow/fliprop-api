<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceProviderType;

class ServiceProviderTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceProviderType::insert(
            [
                ['type' => 'Space Planner'],
                ['type' => 'Contractor']
            ]
            );
    }
}
