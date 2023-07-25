<?php

namespace Modules\Hotel\Database\seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Hotel\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name'=>'Breakfast',
            ],
            [
                'name'=>'Wifi',
            ],
            [
                'name'=>'Spa',
            ],
            [
                'name'=>'Bar',
            ],
        ];

        Service::insert($data);
    }
}
