<?php

namespace Database\Seeders;
use App\Models\Location;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as FakerFactory;
class LocationSeeder extends Seeder
{
    public function run(): void
    {
        $locationsData = [
            [
                'city' => 'Amsterdam',
                'state' => 'North Holland',
                'country' => 'Netherlands',
                'postal_code' => '1012 AB',
            ],
            [
                'city' => 'Paris',
                'state' => 'Île-de-France',
                'country' => 'France',
                'postal_code' => '75001',
            ],
            [
                'city' => 'London',
                'state' => 'England',
                'country' => 'United Kingdom',
                'postal_code' => 'SW1A 1AA',
            ],
            [
                'city' => 'Berlin',
                'state' => 'Brandenburg',
                'country' => 'Germany',
                'postal_code' => '10117',
            ],
            [
                'city' => 'Rome',
                'state' => 'Lazio',
                'country' => 'Italy',
                'postal_code' => '00187',
            ],
            [
                'city' => 'Barcelona',
                'state' => 'Catalonia',
                'country' => 'Spain',
                'postal_code' => '08001',
            ],
            [
                'city' => 'Prague',
                'state' => 'Central Bohemian Region',
                'country' => 'Czech Republic',
                'postal_code' => '110 00',
            ],
            [
                'city' => 'Budapest',
                'state' => 'Pest',
                'country' => 'Hungary',
                'postal_code' => '1055',
            ],
            [
                'city' => 'Vienna',
                'state' => 'Vienna',
                'country' => 'Austria',
                'postal_code' => '1010',
            ],
            [
                'city' => 'Warsaw',
                'state' => 'Masovian Voivodeship',
                'country' => 'Poland',
                'postal_code' => '00-001',
            ],
        ];

        foreach ($locationsData as $data) {
            Location::create([
                'city' => $data['city'],
                'state' => $data['state'],
                'country' => $data['country'],
                'postal_code' => $data['postal_code'],
            ]);
        }
    }
}



//{
//    $fake = FakerFactory::create();
//
//    $countries = [
//        'United States', 'Canada', 'Mexico', 'France', 'Germany',
//        'Italy', 'Spain', 'United Kingdom', 'Australia', 'Japan',
//    ];
//
//    $states = [
//        'Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
//        'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia',
//        'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa',
//    ];
//
//    for ($i = 0; $i < 100; $i++) { // Seed 100 locations (adjust as needed)
//        $city = $fake->city;
//        $state = $fake->optional()->state . ' ' . $fake->optional()->countryCode; // Combine state and country code if no state provided
//        $country = $fake->randomElement($countries);
//        $postalCode = $fake->optional()->postcode; // Postal code may be null
//
//        DB::table('locations')->insert([
//            'city' => $city,
//            'state' => $state,
//            'country' => $country,
//            'postal_code' => $postalCode,
//        ]);
//    }
//}
