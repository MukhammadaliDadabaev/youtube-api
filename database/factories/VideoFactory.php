<?php

namespace Database\Factories;

use App\Models\Channel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
//        $createdAt = $this->faker->dateTimeThisYear();
//        $createdAt = $this->faker->dateTimeThisMonth();
//        $createdAt = $this->faker->dayOfWeek();
//        $createdAt = $this->faker->dateTimeInInterval('-1 week', '+3 days');

//        $createdAt = $this->faker->dateTimeBetween('-1 year');
//        $createdAt = $this->faker->dateTimeBetween('-1 months');
//        $createdAt = $this->faker->dateTimeBetween('-1 day');
//        $createdAt = $this->faker->dateTimeBetween('-1 week');
//        $createdAt = $this->faker->dateTimeBetween('-1 hour');

        $createdAt = $this->createdAt();
        return [
            'title' => ucfirst($this->faker->words(mt_rand(1, 3), true)),
            'channel_id' => Channel::inRandomOrder()->first(),
            'created_at' => $createdAt,
            'updated_at' => $createdAt,

//-------------> 2. USUL
//            'title' => ucfirst($this->faker->words(mt_rand(1, 3), true)),
//            'channel_id' => Channel::factory(),
        ];
    }

//    HAR-HIL Date
    private function createdAt()
    {
        $period = $this->faker->randomElement(['year', 'month', 'day', 'week', 'hour']);
        return $this->faker->dateTimeBetween("-1 $period");
    }
}
