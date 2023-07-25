<?php

namespace Modules\Hotel\Database\seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Hotel\Models\HotelAmenity;

class HotelAmenitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name'=>'Breakfast Included',
            ],
            [
                'name'=>'Wifi Included',
            ],
            [
                'name'=>'Pool',
            ],
            [
                'name'=>'Restaurant',
            ],
            [
                'name'=>'Air conditioning',
            ],
        ];

        HotelAmenity::insert($data);
    }
}
