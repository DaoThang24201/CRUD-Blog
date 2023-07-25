<?php

namespace Modules\Hotel\Database\seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Hotel\Models\HotelRoom;

class HotelRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name'=>'Standard Twin Room',
                'desc'=>'1 extra-large double bed',
            ],
            [
                'name'=>'Deluxe King Room',
                'desc'=>'2 extra-large double bed',
            ],
        ];

        HotelRoom::insert($data);
    }
}
