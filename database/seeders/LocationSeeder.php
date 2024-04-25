<?php

namespace Database\Seeders;
use App\Models\Location;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample data for the locations table
        $locations = [
            [
                'city' => 'New',
                'state' => 'New York',
                'country' => 'USA',
                'postal_code' => '10001',
            ],
            [
                'city' => 'Los Angeles',
                'state' => 'California',
                'country' => 'USA',
                'postal_code' => '90001',
            ],
            [
                'city' => 'Chicago',
                'state' => 'Illinois',
                'country' => 'USA',
                'postal_code' => '60601',
            ],
            [
                'city' => 'Toronto',
                'state' => 'Ontario',
                'country' => 'Canada',
                'postal_code' => 'M5H 2N2',
            ],
            [
                'city' => 'London',
                'state' => 'England',
                'country' => 'United Kingdom',
                'postal_code' => 'WC2N 5DU',
            ],
            [
                'city' => 'Sydney',
                'state' => 'New South Wales',
                'country' => 'Australia',
                'postal_code' => '2000',
            ],
            [
                'city' => 'Tokyo',
                'state' => 'Tokyo',
                'country' => 'Japan',
                'postal_code' => '100-0001',
            ],
            [
                'city' => 'Tokyo',
                'state' => 'Tokyo',
                'country' => 'Japan',
                'postal_code' => '100-0001',
            ],
            [
                'city' => 'Paris',
                'state' => 'Île-de-France',
                'country' => 'France',
                'postal_code' => '75001',
            ],
            [
                'city' => 'Berlin',
                'state' => 'Berlin',
                'country' => 'Germany',
                'postal_code' => '10115',

            ],
            // Add more sample data as needed
        ];

        foreach ($locations as $location) {
            $obj = new Location();
            $obj->city = $location['city'];
            $obj->state = $location['state'];
            $obj->country = $location['country'];
            $obj->postal_code = $location['postal_code'];
            $obj->save();
        }
    }
}
