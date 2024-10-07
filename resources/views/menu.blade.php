@extends('layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
@endsection

@section('content')
    <form action="{{ route('reservasi.store') }}" method="POST">
        @csrf
        <input type="text" name="menu" placeholder="Menu" required>
        <select name="room" required>
            @foreach ($rooms as $room)
                <option value="{{ $room }}">{{ $room }}</option>
            @endforeach
        </select>
        <button type="submit">Submit Reservation</button>
    </form>
@endsection
