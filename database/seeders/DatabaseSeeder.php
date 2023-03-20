<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ChannelSeeder::class,
            CategorySeeder::class,
            VideoSeeder::class,
//            CategoryVideoSeeder::class,
        ]);

//        //-----------------> 2-USUL KO'P - BO'LSA
//        $users = [];
//        $channels = [];
//        $videos = [];
//        $categories = [];
//        $categoryVideo = [];
//        foreach (range(1, 3) as $i) {
//            $users[] = [
//                'name' => "User $i",
//                'email' => "user$i@example.com",
//                'password' => "password$i"
//            ];
//            $channels[] = [
//                'name' => "Channel $i",
//                'user_id' => $i,
//            ];
//            $videos[] = [
//                'title' => "Video $i",
//                'description' => "Text $i",
//                'channel_id' => $i,
//            ];
//            $categories[] = [
//                'name' => "Category $i",
//            ];
//            $categoryVideo[] = [
//                'category_id' => $i,
//                'video_id' => $i,
//            ];
//        }
//        DB::table('users')->insert($users);
//        DB::table('channels')->insert($channels);
//        DB::table('videos')->insert($videos);
//        DB::table('categories')->insert($categories);
//        DB::table('categoryVideo')->insert($categoryVideo);


////-----------------> 1-USUL
//        foreach (range(1,3) as $i) {
//            DB::table('users')->insert([
//                'name' => "User $i",
//                'email' => "user$i@example.com",
//                'password' => "password$i"
//            ]);
//        }
    }
}
