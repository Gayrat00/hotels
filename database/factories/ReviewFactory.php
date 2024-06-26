<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $hotel = Hotel::inRandomOrder()->first();
        return [
            'hotel_id' => $hotel->id,
            'user_id' => $user->id,
            'rating' => fake()->numberBetween(1, 5),
            'comment' => fake()->sentence,
        ];
    }
}
