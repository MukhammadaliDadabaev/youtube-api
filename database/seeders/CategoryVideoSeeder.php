<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class CategoryVideoSeeder extends Seeder
{
//    public function run(): void
//    {
//        $categoryIds = Category::pluck('id');
//        $videoIds = Video::pluck('id');
//
//        $categoryVideo = [];
//
//        foreach ($categoryIds as $categoryId) {
//            $randomVideoIds = Arr::random($videoIds, mt_rand(1, count($videoIds)));
//
//            foreach ($randomVideoIds as $videoId) {
//                $categoryVideo[] = [
//                    'category_id' => $categoryId,
//                    'video_id' => $videoId,
//                ];
//            }
//        }
//
//        DB::table('category_video')->insert($categoryVideo);
//
//
////        //----------> BU SEEDER-ORQALI
////        $categoryVideo = [];
////        foreach (range(1, 3) as $i) {
////            $categoryVideo[] = [
////                'category_id' => $i,
////                'video_id' => $i,
////            ];
////        }
////        DB::table('category_video')->insert($categoryVideo);
//    }

//    public function run(): void
//    {
//        $categoryIds = Category::pluck('id');
//        $videoIds = Video::pluck('id');
//
//        $categoryVideos = $categoryIds->map(function (int $id) use ($videoIds) {
//            return [
//                'category_id' => $id,
//                'video_id' => $videoIds->random(),
//            ];
//        });
//
//        DB::table('category_video')->insert($categoryVideos->all());
//
//    }

//    public function run(): void
//    {
//        $categoryIds = Category::pluck('id');
//        $videoIds = Video::pluck('id');
//
//        $categoryVideos = $categoryIds->flatMap(function (int $id) use ($videoIds) {
//            $randomVideoIds = $videoIds->random(mt_rand(1, count($videoIds)));
//
//            return $randomVideoIds->map(function (int $videoId) use ($id) {
//                return [
//                    'category_id' => $id,
//                    'video_id' => $videoId,
//                ];
//            });
//        });
//
//        DB::table('category_video')->insert($categoryVideos->all());
//    }

    public function run(): void
    {
        $categoryIds = Category::pluck('id');
        $videoIds = Video::pluck('id');

        $categoryVideos = $categoryIds->flatMap(
            fn(int $id) => $this->categoryVideos($id, $this->randomVideoIds($videoIds))
        );

        DB::table('category_video')->insert($categoryVideos->all());
    }

    private function categoryVideos(int $categoryId, Collection $videoIds): Collection
    {
        return $videoIds->map(fn(int $id) => [
            'category_id' => $categoryId,
            'video_id' => $id,
        ]);
    }

    private function randomVideoIds(Collection $ids): Collection
    {
        return $ids->random(mt_rand(1, count($ids)));
    }
}
