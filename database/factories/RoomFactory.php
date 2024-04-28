<?php

namespace Database\Factories;
use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    public function definition(): array
    {
        $roomTypes = [
            'Standard',
            'Deluxe',
            'Family',
            'King',
            'Single',
            'Double',
        ];
        $hotel = Hotel::inRandomOrder()->first();
        return [
            'hotel_id' => $hotel->id,
            'room_type' => fake()->randomElement($roomTypes),
            'price' => fake()->numberBetween(100, 500) * 10,
            'availability' => fake()->boolean(70),
        ];

    }
}
