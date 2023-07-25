<?php

namespace Modules\Hotel\Database\seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Hotel\Models\HotelStyle;

class HotelStyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name'=>'Budget',
            ],
            [
                'name'=>'Mid-range',
            ],
            [
                'name'=>'Luxury',
            ],
            [
                'name'=>'Family-friendly',
            ],
            [
                'name'=>'Business',
            ],
        ];

        HotelStyle::insert($data);
    }
}
