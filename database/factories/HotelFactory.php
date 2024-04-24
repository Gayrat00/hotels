<?php

namespace Database\Factories;
use App\Models\Hotel;
use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    protected $model = Hotel::class;

    public function definition(): array
    {
        $location = Location::inRandomOrder()->first();
        return [
            'location_id' => $location->id,
            'name' => $this->faker->company,
            'address' => $this->faker->address,
            'rating' => $this->faker->randomFloat(1, 1, 5),
            'description' => $this->faker->paragraph,
            'price_per_night' => $this->faker->randomFloat(2, 50, 500),
        ];
    }
}
