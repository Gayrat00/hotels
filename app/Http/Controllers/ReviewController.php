<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        // Получение всех отзывов с загрузкой связанных моделей (отеля и пользователя)
        $reviews = Review::with(['hotel', 'user'])->get();

        // Возвращение представления для отображения списка отзывов
        return view('review.index', compact('reviews'));
    }
}
