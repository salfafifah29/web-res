<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    // Menampilkan form reservasi
    public function create()
    {
        return view('reservations.create');
    }

    // Menyimpan data reservasi ke database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'reservation_date' => 'required|date',
            'number_of_people' => 'required|integer|min:1',
            'special_requests' => 'nullable|string',
        ]);

        Reservation::create($request->all());

        return redirect()->route('reservations.create')->with('success', 'Reservation made successfully!');
    }
}

