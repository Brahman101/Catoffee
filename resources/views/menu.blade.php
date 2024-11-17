@extends('layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
@endsection

@section('content')
    <a href="{{ route('history') }}" class="btn btn-primary mb-3">View Reservation History</a>s
    <form action="{{ route('reservasi.store') }}" method="POST">
        @csrf
        <div>
            <input type="text" name="menu" placeholder="Menu" value="{{ old('menu') }}">
            @error('menu')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <select name="room" required>
                @foreach ($rooms as $room)
                    <option value="{{ $room }}" {{ old('room') == $room ? 'selected' : '' }}>{{ $room }}
                    </option>
                @endforeach
            </select>
            @error('room')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit">Submit Reservation</button>
    </form>
@endsection
