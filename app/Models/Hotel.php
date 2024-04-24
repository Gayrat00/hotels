<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'rating',
        'description',
        'price_per_night'];

    // Отношения

    // Отель имеет много комнат
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    // Отель имеет много отзывов
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
