<?php

namespace Modules\Hotel\Database\seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Hotel\Models\HotelNeighbor;

class HotelNeighborSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name'=>'Central London',
            ],
            [
                'name'=>'Guests\' favourite area',
            ],
            [
                'name'=>'Westminster Borough',
            ],
            [
                'name'=>'Kensington and Chelsea',
            ],
            [
                'name'=>'Oxford Street',
            ],
        ];

        HotelNeighbor::insert($data);
    }
}
