<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Video::factory()->count(3)->create();

        //----------> BU SEEDER-ORQALI
//        $videos = [];
//        foreach (range(1, 3) as $i) {
//            $videos[] = [
//                'title' => "Video $i",
//                'description' => "Text description $i",
//                'channel_id' => $i,
//            ];
//        }
//         DB::table('videos')->insert($videos);

    }
}
