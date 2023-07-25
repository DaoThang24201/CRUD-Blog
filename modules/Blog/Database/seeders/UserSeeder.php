<?php

namespace Modules\Blog\Database\seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Blog\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name'=>'Tonko',
                'avatar'=>'1.png',
                'email'=>'Tonko@gmail.com'
            ],
            [
                'name'=>'Jack',
                'avatar'=>'2.png',
                'email'=>'Jack@gmail.com'
            ],
            [
                'name'=>'Peter',
                'avatar'=>'3.png',
                'email'=>'Peter@gmail.com'
            ],
            [
                'name'=>'Nash',
                'avatar'=>'4.png',
                'email'=>'Nash@gmail.com'
            ],
            [
                'name'=>'Erva',
                'avatar'=>'5.png',
                'email'=>'Erva@gmail.com'
            ],
        ];

        User::insert($data);
    }
}
