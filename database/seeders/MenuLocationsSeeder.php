<?php

namespace Database\Seeders;

use App\Models\MenuLocations;
use Illuminate\Database\Seeder;

class MenuLocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MenuLocations::insert(
            [
                ['name' => 'Gauteng', 'link' => 'gauteng'],
                ['name' => 'Western Cape', 'link' => 'western-cape'],
                ['name' => 'Kwazulu Natal', 'link' => 'kwazulu-natal'],
                ['name' => 'Eastern Cape', 'link' => 'eastern-cape'],
                ['name' => 'Limpopo', 'link' => 'limpopo'],
            ]
        );
    }
}
