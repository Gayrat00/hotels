<?php

namespace Database\Seeders;
use App\Models\Hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as FakerFactory;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Создать 10 отелей с использованием фабрики
        $faker = FakerFactory::create();

        $locations = DB::table('locations')->pluck('id'); // Get all location IDs for foreign key reference

        for ($i = 0; $i < 50; $i++) { // Seed 50 hotels (adjust as needed)
            $name = $faker->unique()->company . ' Hotel'; // Ensure unique hotel names
            $address = $faker->streetAddress . ', ' . $faker->city . ', ' . $faker->state . ' ' . $faker->postcode();
            $locationId = $faker->randomElement($locations->toArray()); // Randomly pick a location ID
            $rating = number_format($faker->randomFloat(1, 1, 5), 1); // Rating between 1.0 and 5.0 with one decimal
            $description = $faker->optional()->paragraph; // Description may be null
            $pricePerNight = number_format($faker->randomFloat(2, 50, 500), 2); // Price between $50 and $500 with two decimals

            DB::table('hotels')->insert([
                'name' => $name,
                'address' => $address,
                'location_id' => $locationId,
                'rating' => $rating,
                'description' => $description,
                'price_per_night' => $pricePerNight,
            ]);
        }
    }
}
