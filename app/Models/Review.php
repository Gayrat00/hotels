<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'hotel_id',
        'user_id',
        'rating',
        'comment'];

    // Отношения

    // Отзыв принадлежит отелю
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    // Отзыв принадлежит пользователю
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}