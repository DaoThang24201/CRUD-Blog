<?php

namespace Modules\Blog\Database\seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Blog\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name'=>'Museum',
                'slug'=>'museum'
            ],
            [
                'name'=>'Park',
                'slug'=>'park'
            ],
        ];

        Tag::insert($data);
    }
}
