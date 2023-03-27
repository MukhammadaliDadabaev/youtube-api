<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class CategoryVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::get()->all();
        $videos = Video::get()->all();

        $categoryVideo = [];

        foreach ($categories as $category) {
            $randomVideos = Arr::random($videos, mt_rand(1, count($videos)));

            foreach ($randomVideos as $video) {
                $categoryVideo[] = [
                    'category_id' => $category['id'],
                    'video_id' => $video['id'],
                ];
            }
        }

        DB::table('category_video')->insert($categoryVideo);


//        //----------> BU SEEDER-ORQALI
//        $categoryVideo = [];
//        foreach (range(1, 3) as $i) {
//            $categoryVideo[] = [
//                'category_id' => $i,
//                'video_id' => $i,
//            ];
//        }
//        DB::table('category_video')->insert($categoryVideo);
    }
}
