<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Blog\Database\seeders\AuthSeeder;
use Modules\Blog\Database\seeders\BlogCategorySeeder;
use Modules\Blog\Database\seeders\BlogCommentSeeder;
use Modules\Blog\Database\seeders\BlogImageSeeder;
use Modules\Blog\Database\seeders\BlogSeeder;
use Modules\Blog\Database\seeders\BlogTagSeeder;
use Modules\Blog\Database\seeders\CommentImageSeeder;
use Modules\Blog\Database\seeders\ParentCategorySeeder;
use Modules\Blog\Database\seeders\TagSeeder;
use Modules\Blog\Database\seeders\UserSeeder;
use Modules\Hotel\Database\seeders\HotelAmenitySeeder;
use Modules\Hotel\Database\seeders\HotelDealSeeder;
use Modules\Hotel\Database\seeders\HotelFilterSeeder;
use Modules\Hotel\Database\seeders\HotelNeighborSeeder;
use Modules\Hotel\Database\seeders\HotelRoomSeeder;
use Modules\Hotel\Database\seeders\HotelSeeder;
use Modules\Hotel\Database\seeders\HotelServiceSeeder;
use Modules\Hotel\Database\seeders\HotelStyleSeeder;
use Modules\Hotel\Database\seeders\ServiceSeeder;
use Modules\Hotel\Models\HotelRoom;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([

            BlogSeeder::class,
            AuthSeeder::class,
            BlogCategorySeeder::class,
            BlogCommentSeeder::class,
            BlogImageSeeder::class,
            BlogTagSeeder::class,
            CommentImageSeeder::class,
            TagSeeder::class,
            UserSeeder::class,

            HotelSeeder::class,
            HotelDealSeeder::class,
            HotelAmenitySeeder::class,
            HotelFilterSeeder::class,
            HotelNeighborSeeder::class,
            HotelRoomSeeder::class,
            HotelServiceSeeder::class,
            HotelStyleSeeder::class,
            ServiceSeeder::class,
        ]);
    }
}
