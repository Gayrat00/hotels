<?php

namespace Database\Factories;
use App\Models\Room;
use App\Models\User;
use App\Models\Hotel;
use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ReviewFactory extends Factory
{
    protected $model = Review::class;

    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $hotel = Hotel::inRandomOrder()->first();
        return [
            'hotel_id' => $hotel->id,
            'user_id' => $user->id,
            'rating' => fake()->numberBetween(1, 5),
            'comment' => $this->faker->sentence,
        ];
    }
}
