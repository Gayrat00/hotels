<?php

namespace Database\Seeders;
use App\Models\Hotel;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{

    public function run(): void
    {
        $hotelsData = [
            [   'name' => 'Seaside Inn',
                'address' => '456 Ocean Drive, Miami Beach, FL 33139',
                'description' => 'A beachfront hotel with stunning ocean views and a relaxing atmosphere.'
            ],
            [   'name' => 'Hotel Central',
                'address' => '123 Main Street, New York, NY 10001',
                'description' => 'A modern hotel in the heart of the city, offering luxurious rooms and amenities.',
            ],
            [
                'name' => 'Mountain Retreat',
                'address' => '789 Mountain Road, Aspen, CO 81611',
                'description' => 'A cozy hotel nestled in the mountains, perfect for outdoor enthusiasts.',
            ],
            [
                'name' => 'Urban Escape Hotel',
                'address' => '202 City Plaza, Los Angeles, CA 90012',
                'description' => 'A stylish hotel with modern design and easy access to downtown attractions.',
            ],
            [
                'name' => 'Lakeside Resort',
                'address' => '404 Lakeview Drive, Tahoe City, CA 96145',
                'description' => 'A luxury resort on the shores of Lake Tahoe, featuring top-notch amenities and outdoor activities.',
            ],
            [
                'name' => 'Desert Oasis Hotel',
                'address' => '606 Desert Road, Palm Springs, CA 92262',
                'description' => 'A relaxing hotel in the desert, with spacious rooms and beautiful views.',
            ],
            [   'name' => 'Seaside Inn',
                'address' => '456 Ocean Drive, Miami Beach, FL 33139',
                'description' => 'A beachfront hotel with stunning ocean views and a relaxing atmosphere.'
            ],
            [
                'name' => 'Sunset Palms Resort',
                'address' => '1 Palm Boulevard, Los Angeles, CA 90210',
                'description' => 'A luxurious resort offering spacious accommodations, world-class amenities, and breathtaking sunset views.'
            ],
            [
                'name' => 'Grand Hilltop Hotel',
                'address' => '567 Elm Street, San Francisco, CA 94102',
                'description' => 'A historic hotel with classic charm, located in a vibrant and walkable neighborhood.'
            ],
            [
                'name' => 'The Cozy Nook',
                'address' => '34 Maple Lane, Burlington, VT 05401',
                'description' => 'A charming bed and breakfast offering a warm and inviting atmosphere, perfect for a romantic getaway.'
            ],
            [
                'name' => 'Lakeside Serenity',
                'address' => '890 Lakeside Drive, Chicago, IL 60611',
                'description' => 'A serene hotel overlooking a peaceful lake, ideal for relaxation and rejuvenation.'
            ],
            [
                'name'  => 'Tranquility Spa Resort',
                'address' => '45 Serenity Lane, Austin, TX 78704',
                'description' => 'A luxurious spa resort focused on wellness and relaxation, offering a variety of treatments and activities.'
            ],
            [
                'name' => 'The Riverbank Lodge',
                'address' => '678 River Road, Jackson Hole, WY 83019',
                'description' => 'A rustic lodge nestled on the banks of a majestic river, perfect for a nature getaway and fishing adventures.'
            ],
            [
                'name' => 'The Urban Oasis',
                'address' => '901 Park Avenue, Atlanta, GA 30303',
                'description' => 'A stylish hotel offering a peaceful retreat in the heart of the city, perfect for business travelers and weekend getaways.'
            ],
            [
                'name' => 'The Landmark Hotel',
                'address' => '321 Historic Street, Boston, MA 02114',
                'description' => 'A historic hotel steeped in charm and tradition, located in a walkable neighborhood with museums and cultural attractions.'
            ]];

        foreach ($hotelsData as $data) {
            Hotel::create([
                    'name' => $data['name'],
                    'address' => $data['address'],
                    'location_id' => rand(1, 10),
                    'rating' => rand(1, 5),
                    'description' => $data['description'],
                    'price_per_night' => rand(1000, 100000) / 100,
            ]);
        }
    }
}


//$fake = FakerFactory::create();
//
//$locations = DB::table('locations')->pluck('id');
//
//for ($i = 0; $i < 50; $i++) {
//    $name = $fake->unique()->company . ' Hotel';
//    $address = $fake->streetAddress . ', ' . $fake->city . ', ' . $fake->state . ' ' . $fake->postcode();
//    $locationId = $fake->randomElement($locations->toArray());
//    $rating = number_format($fake->randomFloat(1, 1, 5), 1);
//    $description = $fake->optional()->paragraph;
//    $pricePerNight = number_format($fake->randomFloat(2, 50, 500), 2);
//
//    DB::table('hotels')->insert([
//        'name' => $name,
//        'address' => $address,
//        'location_id' => $locationId,
//        'rating' => $rating,
//        'description' => $description,
//        'price_per_night' => $pricePerNight,
//    ]);
//}
