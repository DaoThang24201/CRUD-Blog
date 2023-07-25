<?php

namespace Modules\Hotel\Database\seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Hotel\Models\HotelDeal;

class HotelDealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name'=>'Free cancellation',
                'desc'=>'You can cancel later, so lock in this great price today.',
            ],
            [
                'name'=>'Reserve now, pay at stay',
                'desc'=>'Speaking with UN News one hour after fierce shelling sparked',
            ],
            [
                'name'=>'Properties with special offers',
                'desc'=>'The master plan is now unfurling, developed on a voluntary',
            ],
        ];

        HotelDeal::insert($data);
    }
}
