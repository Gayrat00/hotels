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
        $objs = [
            'Netherlands',
            'France',
            'United Kingdom',
            'Germany',
            'Italy',
            'Spain',
            'Czech Republic',
            'Hungary',
            'Austria',
            'Poland',
        ];

        foreach ($objs as $country) {
            Location::create([
                'country' => $country,
            ]);
        }
    }

}

