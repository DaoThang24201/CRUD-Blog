<?php

namespace Modules\Blog\Database\seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Blog\Models\BlogImage;

class BlogImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'blog_id'=>1,
                'path'=>'1.png',
            ],
            [
                'blog_id'=>2,
                'path'=>'1.png',
            ],
            [
                'blog_id'=>3,
                'path'=>'1.png',
            ],
            [
                'blog_id'=>4,
                'path'=>'1.png',
            ],
            [
                'blog_id'=>5,
                'path'=>'1.png',
            ],
            [
                'blog_id'=>6,
                'path'=>'1.png',
            ],
            [
                'blog_id'=>7,
                'path'=>'1.png',
            ],
        ];

        BlogImage::insert($data);
    }
}
