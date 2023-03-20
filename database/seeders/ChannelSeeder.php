<?php

namespace Database\Seeders;

use App\Models\Channel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Channel::factory()->count(3)->create();

        //----------> BU SEEDER-ORQALI
//        $channels = [];
//        foreach (range(1, 3) as $i) {
//            $channels[] = [
//                'name' => "Channel $i",
//                'user_id' => $i,
//            ];
//        }
//        DB::table('channels')->insert($channels);

    }
}
