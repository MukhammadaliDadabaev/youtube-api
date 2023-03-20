<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->count(3)->create();

//        //----------> BU SEEDER-ORQALI
//        $categories = [];
//        foreach (range(1, 3) as $i) {
//            $categories[] = [
//                'name' => "Category $i",
//            ];
//        }
//        DB::table('categories')->insert($categories);

    }
}
