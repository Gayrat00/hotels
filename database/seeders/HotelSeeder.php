<?php

namespace Database\Seeders;
use App\Models\Hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Создать 10 отелей с использованием фабрики
        Hotel::factory()->count(100)->create();
    }
}
