<?php

namespace Database\Seeders;
use App\Models\Hotel;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{

    public function run(): void
    {
        $hotelsData = [
            [
                'name' => 'Seaside Inn',
                'address' => '456 Ocean Drive, Miami Beach, FL 33139',],
            [
                'name' => 'Hotel Central',
                'address' => '123 Main Street, New York, NY 10001',],
            [
                'name' => 'Mountain Retreat',
                'address' => '789 Mountain Road, Aspen, CO 81611',],
            [
                'name' => 'Urban Escape Hotel',
                'address' => '202 City Plaza, Los Angeles, CA 90012',],
            [
                'name' => 'Lakeside Resort',
                'address' => '404 Lakeview Drive, Tahoe City, CA 96145',],
            [
                'name' => 'Desert Oasis Hotel',
                'address' => '606 Desert Road, Palm Springs, CA 92262',],
            [   'name' => 'Seaside Inn',
                'address' => '456 Ocean Drive, Miami Beach, FL 33139',],
            [
                'name' => 'Sunset Palms Resort',
                'address' => '1 Palm Boulevard, Los Angeles, CA 90210',],
            [
                'name' => 'Grand Hilltop Hotel',
                'address' => '567 Elm Street, San Francisco, CA 94102',],
            [
                'name' => 'The Cozy Nook',
                'address' => '34 Maple Lane, Burlington, VT 05401',],
            [
                'name' => 'Lakeside Serenity',
                'address' => '890 Lakeside Drive, Chicago, IL 60611',],
            [
                'name'  => 'Tranquility Spa Resort',
                'address' => '45 Serenity Lane, Austin, TX 78704',],
            [
                'name' => 'The Riverbank Lodge',
                'address' => '678 River Road, Jackson Hole, WY 83019',],
            [
                'name' => 'The Urban Oasis',
                'address' => '901 Park Avenue, Atlanta, GA 30303',
            ],
            [
                'name' => 'The Landmark Hotel',
                'address' => '321 Historic Street, Boston, MA 02114',
            ],
            [
                'name' => 'The Landmark Hotel',
                'address' => '321 Historic Street, Boston, MA 02114',
            ],
            [
                'name' => 'The Landmark Hotel',
                'address' => '321 Historic Street, Boston, MA 02114',
            ],
            [
                'name' => 'The Landmark Hotel',
                'address' => '321 Historic Street, Boston, MA 02114',
            ],
            [
                'name' => 'The Landmark Hotel',
                'address' => '321 Historic Street, Boston, MA 02114',
            ],
            [
                'name' => 'The Landmark Hotel',
                'address' => '321 Historic Street, Boston, MA 02114',
            ],
            [
                'name' => 'The Landmark Hotel',
                'address' => '321 Historic Street, Boston, MA 02114',
            ],
            [
                'name' => 'The Landmark Hotel',
                'address' => '321 Historic Street, Boston, MA 02114',
            ],
            [
                'name' => 'The Landmark Hotel',
                'address' => '321 Historic Street, Boston, MA 02114',
            ],
            [
                'name' => 'The Landmark Hotel',
                'address' => '321 Historic Street, Boston, MA 02114',
            ],
            [
                'name' => 'The Landmark Hotel',
                'address' => '321 Historic Street, Boston, MA 02114',
            ],
            [
                'name' => 'The Landmark Hotel',
                'address' => '321 Historic Street, Boston, MA 02114',
            ]

        ];

        foreach ($hotelsData as $data) {
            Hotel::create([
                    'name' => $data['name'],
                    'address' => $data['address'],
                    'location_id' => rand(1, 10),
                    'rating' => rand(1, 5),
                    'description' => fake()->paragraph(rand(2,10)),
                    'price_per_night' => rand(1000, 100000) / 100,
            ]);
        }
    }
}
