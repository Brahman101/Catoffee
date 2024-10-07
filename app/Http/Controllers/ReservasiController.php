<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservasi::all();
        return view('history', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reservations = Reservasi::all();
        $rooms = ['Room A', 'Room B', 'Room C'];
        return view('menu', compact('reservations', 'rooms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'menu' => 'required',
            'room' => 'required',
        ]);

        $data = $request->all();
        $data['user_id'] = auth()->id();

        Reservasi::create($data);
        return redirect()->route('history')->with('success', 'Reservation created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $reservation = Reservasi::findOrFail($id);
        $rooms = ['Room A', 'Room B', 'Room C']; // Add your room options
        return view('edit', compact('reservation', 'rooms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $reservation = Reservasi::findOrFail($id);
        $reservation->update($request->all());
        return redirect()->route('history')->with('success', 'Reservation updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reservation = Reservasi::findOrFail($id);
        $reservation->delete();
        return redirect()->route('history')->with('success', 'Reservation deleted successfully.');
    }

    public function history()
    {
        $reservations = Reservasi::where('user_id', auth()->id())->get();
        return view('history', compact('reservations'));
    }
}