<?php

namespace App\Http\Controllers;
use App\Models\brand_cars;
use App\Models\cars;

class carsController extends Controller
{
    function index()
    {
        $user = auth()->user();

        $cars = cars::with('brand')->with('name')->with('type')->with('status')
            ->where('owner_cars_id', $user->id)->get();

        return view('dashboard') -> with('cars', $cars);
    }
}
