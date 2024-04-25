<?php

namespace Database\Factories;
use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    protected $model = Room::class;

    public function definition(): array
    {
        $hotel = Hotel::inRandomOrder()->first();
        return [
            'hotel_id' => $hotel->id,
            'room_type' => $this->faker->word,
            'price' => fake()->numberBetween(100, 500) * 10,
            'availability' => fake()->boolean(60),
        ];

    }
}
