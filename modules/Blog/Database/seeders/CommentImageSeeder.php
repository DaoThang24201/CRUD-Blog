<?php

namespace Modules\Blog\Database\seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Blog\Models\CommentImage;

class CommentImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'comment_id'=>'1',
                'path'=>'1.png'
            ],
            [
                'comment_id'=>'1',
                'path'=>'2.png'
            ],
            [
                'comment_id'=>'1',
                'path'=>'3.png'
            ],
            [
                'comment_id'=>'1',
                'path'=>'4.png'
            ],
            [
                'comment_id'=>'3',
                'path'=>'2.png'
            ],
            [
                'comment_id'=>'3',
                'path'=>'3.png'
            ],[
                'comment_id'=>'2',
                'path'=>'1.png'
            ],
            [
                'comment_id'=>'2',
                'path'=>'2.png'
            ],
            [
                'comment_id'=>'2',
                'path'=>'3.png'
            ],
            [
                'comment_id'=>'2',
                'path'=>'4.png'
            ],
            [
                'comment_id'=>'3',
                'path'=>'2.png'
            ],
            [
                'comment_id'=>'3',
                'path'=>'3.png'
            ],
            [
                'comment_id'=>'4',
                'path'=>'3.png'
            ],
            [
                'comment_id'=>'4',
                'path'=>'4.png'
            ],
            [
                'comment_id'=>'4',
                'path'=>'2.png'
            ],
            [
                'comment_id'=>'6',
                'path'=>'3.png'
            ],
            [
                'comment_id'=>'6',
                'path'=>'3.png'
            ],
            [
                'comment_id'=>'7',
                'path'=>'4.png'
            ],
            [
                'comment_id'=>'7',
                'path'=>'2.png'
            ],
            [
                'comment_id'=>'7',
                'path'=>'3.png'
            ],
        ];

        CommentImage::insert($data);
    }
}
