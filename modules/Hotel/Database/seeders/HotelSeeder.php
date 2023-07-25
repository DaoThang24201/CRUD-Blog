<?php

namespace Modules\Hotel\Database\seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Hotel\Models\Hotel;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'deal_id'=>'1',
                'filter_id'=>'1',
                'amenity_id'=>'1',
                'style_id'=>'1',
                'neighbor_id'=>'1',
                'room_id'=>'1',
                'title'=>'Great Northern Hotel, a Tribute Portfolio',
                'banner'=>'1.png',
                'type'=>'Hotel',
                'city'=>'London',
                'region'=>'Westminster Borough',
                'price'=>'100',
                'slug'=>'1',
            ],
        ];

        Hotel::insert($data);
    }
}
