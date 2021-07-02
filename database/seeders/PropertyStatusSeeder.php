<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PropertyStatus;

class PropertyStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PropertyStatus::insert(
            [
                ['name' => 'auction'],
                ['name' => 'reduced'],
                ['name' => 'listed'],
                ['name' => 'sold'],
            ]
        );
    }
}
