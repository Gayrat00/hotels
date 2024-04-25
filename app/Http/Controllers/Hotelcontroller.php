<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class Hotelcontroller extends Controller
{
    /**
     * Отобразить список всех отелей.
     */
    public function index()
    {
        $hotels = Hotel::all();
        return view('hotels.index', compact('hotels'));
    }

    /**
     * Показать форму для создания нового отеля.
     */
    public function create()
    {
        return view('hotels.create');
    }

    /**
     * Сохранить новый отель в базе данных.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location_id' => 'required|exists:locations,id',
            // Добавьте другие правила валидации по необходимости
        ]);

        $hotel = Hotel::create($request->all());
        return redirect()->route('hotels.show', $hotel);
    }

    /**
     * Отобразить данные об определенном отеле.
     */
    public function show(Hotel $hotel)
    {
        return view('hotels.show', compact('hotel'));
    }

    /**
     * Показать форму для редактирования отеля.
     */
    public function edit(Hotel $hotel)
    {
        return view('hotels.edit', compact('hotel'));
    }

    /**
     * Обновить данные об отеле в базе данных.
     */
    public function update(Request $request, Hotel $hotel)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location_id' => 'required|exists:locations,id',
            // Добавьте другие правила валидации по необходимости
        ]);

        $hotel->update($request->all());
        return redirect()->route('hotels.show', $hotel);
    }

    /**
     * Удалить отель из базы данных.
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return redirect()->route('hotels.index');
    }
}
