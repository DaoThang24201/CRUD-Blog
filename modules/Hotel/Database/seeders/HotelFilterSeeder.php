<?php

namespace Modules\Hotel\Database\seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Hotel\Models\HotelFilter;

class HotelFilterSeeder extends Seeder
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
                'name'=>'Romantic',
            ],
            [
                'name'=>'Airport Transfer',
            ],
            [
                'name'=>'Wifi Included',
            ],
            [
                'name'=>'5 star',
            ],
        ];

        HotelFilter::insert($data);
    }
}
