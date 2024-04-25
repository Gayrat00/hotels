<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Hotel;
use App\Models\Review;
use App\Models\Room;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            LocationSeeder::class,
            HotelSeeder::class,
        ]);

        User::factory()->count(20)->create();
        Room::factory()->count(10)->create();
        Review::factory()->count(10)->create();
        Booking::factory()->count(10)->create();
    }
}