<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'hotel_id',
        'phone',
        'email',
        'website',
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

}
