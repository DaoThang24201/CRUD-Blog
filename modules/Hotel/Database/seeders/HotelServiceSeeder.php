<?php

namespace Modules\Hotel\Database\seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Hotel\Models\HotelService;

class HotelServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'hotel_id'=>'1',
                'service_id'=>'1',
            ],
            [
                'hotel_id'=>'1',
                'service_id'=>'2',
            ],
            [
                'hotel_id'=>'1',
                'service_id'=>'3',
            ],
            [
                'hotel_id'=>'2',
                'service_id'=>'2',
            ],
            [
                'hotel_id'=>'2',
                'service_id'=>'4',
            ],
            [
                'hotel_id'=>'3',
                'service_id'=>'3',
            ],
            [
                'hotel_id'=>'4',
                'service_id'=>'1',
            ],
        ];

        HotelService::insert($data);
    }
}
