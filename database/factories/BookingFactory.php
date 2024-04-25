<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Room;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    protected $model = Booking::class;

    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $room = Room::inRandomOrder()->first();
        $start_date = fake()->dateTimeBetween('-6 months', 'now');
        $end_date = fake()->dateTimeBetween('-3 months', 'now');
        return [
            'user_id' => $user->id,
            'room_id' => $room->id,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'total_price' => fake()->numberBetween(200, 300) * 100,
        ];
    }
}