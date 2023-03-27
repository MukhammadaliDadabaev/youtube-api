<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Channel;
use App\Models\User;
use App\Models\Video;
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
            CategoryVideoSeeder::class,
        ]);

//-------------> 2. USUL
        //        User::factory(3)->has(
//            Channel::factory()->has(
//                Video::factory(5)->has(
//                    Category::factory(3)
//                )
//            )
//        )->create();

        //-------------> 3. USUL
//        Video::factory(5)->hasCategories(3)->create();

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
