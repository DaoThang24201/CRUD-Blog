<?php

namespace Modules\Blog\Database\seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Blog\Models\BlogComment;

class BlogCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id'=>'1',
                'blog_id'=>'1',
                'rating'=>8.5,
                'messages'=>'Nice two level apartment in great London location. Located in quiet small street, but just 50 meters from main street and bus stop. Tube station is short walk, just like two grocery stores.'
            ],
            [
                'user_id'=>'1',
                'blog_id'=>'2',
                'rating'=>8.9,
                'messages'=>'Nice two level apartment in great London location. Located in quiet small street, but just 50 meters from main street and bus stop. Tube station is short walk, just like two grocery stores.'
            ],
            [
                'user_id'=>'2',
                'blog_id'=>'1',
                'rating'=>8.9,
                'messages'=>'Morbi tincidunt, metus et faucibus tincidunt, elit mi convallis risus, vitae imperdiet enim lectus id massa.'
            ],
            [
                'user_id'=>'3',
                'blog_id'=>'1',
                'rating'=>5.0,
                'messages'=>'o. Vestibulum molestie pretium velit a eleifend. Nullam tristique blandit ultricies. Maecenas nec arcu egestas nulla rhoncus pulvinar. Cras ut condimentum dolo'
            ],
            [
                'user_id'=>'4',
                'blog_id'=>'1',
                'rating'=>7.3,
                'messages'=>'ed ligula lectus. Sed lacinia purus quis tortor blandit, eu laoreet metus pharetra. Fusce lorem justo, vulputate in imperdiet at, interdum id sem. Vestibulum volutpat moll'
            ],
            [
                'user_id'=>'5',
                'blog_id'=>'2',
                'rating'=>1.8,
                'messages'=>'c ipsum eu sapien efficitur auctor eu in dolor. Suspendisse potenti. Integer risus mi, cursus dictum imperdiet eu, porttitor sit amet ex. Curabitur aliquet porttito'
            ],
            [
                'user_id'=>'6',
                'blog_id'=>'2',
                'rating'=>7.6,
                'messages'=>'san leo non ante venenatis tempor. Cras id tincidu'
            ],
        ];

        BlogComment::insert($data);
    }
}
