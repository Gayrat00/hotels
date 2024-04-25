<?php

namespace Database\Seeders;
use App\Models\Location;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as FakerFactory;
class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            $faker = FakerFactory::create();

            $countries = [
                'United States', 'Canada', 'Mexico', 'France', 'Germany',
                'Italy', 'Spain', 'United Kingdom', 'Australia', 'Japan',
            ]; // Adjust as needed

            $states = [ // Example US states, modify for other countries
                'Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
                'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia',
                'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa',
                // ... (add remaining states)
            ];

            for ($i = 0; $i < 100; $i++) { // Seed 100 locations (adjust as needed)
                $city = $faker->city;
                $state = $faker->optional()->state . ' ' . $faker->optional()->countryCode; // Combine state and country code if no state provided
                $country = $faker->randomElement($countries);
                $postalCode = $faker->optional()->postcode; // Postal code may be null

                DB::table('locations')->insert([
                    'city' => $city,
                    'state' => $state,
                    'country' => $country,
                    'postal_code' => $postalCode,
                ]);
            }
        }
    }
}
