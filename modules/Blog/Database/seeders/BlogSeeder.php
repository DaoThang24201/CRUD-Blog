<?php

namespace Modules\Blog\Database\seeders;

use Illuminate\Database\Seeder;
use Modules\Blog\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'auth_id'=>1,
                'category_id'=>1,
                'title'=>'9 Award-Winning Ski Resorts Near Salt Lake City',
                'subtitle'=>'elit. Curabitur ipsum lorem, iaculis ac sodales eu, laoreet in justo. Nunc facilisis purus in consequat fringilla. Fusce in elit augue',
                'content'=>'',
                'banner'=>'1.png',
                'status'=>'publish'
            ],
            [
                'auth_id'=>2,
                'category_id'=>2,
                'title'=>'The top 7 places in Japan to see cherry blossom',
                'subtitle'=>'Quisque sed velit mi. Fusce euismod sodales purus, eget commodo neque tempus at. Sed sagittis dui gravida elit s',
                'content'=>'',
                'banner'=>'2.png',
                'status'=>'pending'
            ],
            [
                'auth_id'=>3,
                'category_id'=>3,
                'title'=>'The top 7 places in Japan to see cherry blossom',
                'subtitle'=>'Quisque sed velit mi. Fusce euismod sodales purus, eget commodo neque tempus at. Sed sagittis dui gravida elit s',
                'content'=>'',
                'banner'=>'2.png',
                'status'=>'draft'
            ],
        ];

        Blog::insert($data);
    }
}
