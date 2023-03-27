<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Channel>
 */
class ChannelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => ucfirst($this->faker->words(mt_rand(1, 3), true)),
            'user_id' => User::inRandomOrder()->first()->id,

//-------------> 2. USUL
//            'name' => ucfirst($this->faker->words(mt_rand(1, 3), true)),
//            'user_id' => User::factory(),

//-------------> 3. USUL   COLLBACK-FUNC
//            'user_id' => User::factory(),
//            'name' => function (array $attributes) {
//                return User::find($attributes['user_id'])->name;
//            }
        ];
    }
}
