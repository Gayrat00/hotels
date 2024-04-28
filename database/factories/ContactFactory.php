<?php

namespace Database\Factories;
use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{

    public function definition(): array
    {
        $hotel = Hotel::inRandomOrder()->first();
        return [
            'hotel_id' => $hotel->id,
            'phone' => fake()->phoneNumber,
            'email' => fake()->safeEmail,
            'website' => fake()->url,
        ];
    }
}
