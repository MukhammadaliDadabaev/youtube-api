<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(3)->create();

//----------> BU SEEDER-ORQALI
//        $users = [];
//        foreach (range(1, 3) as $i) {
//            $users[] = [
//                'name' => "User $i",
//                'email' => "user$i@example.com",
//                'password' => Hash::make("password$i"),
//            ];
//        }
//        DB::table('users')->insert($users);
    }
}
