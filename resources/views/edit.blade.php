@extends('layout.app')

@section('content')
    <div class="container">
        <h2>Edit Reservation</h2>
        <form action="{{ route('reservasi.update', $reservation->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="menu">Menu</label>
                <input type="text" class="form-control" id="menu" name="menu" value="{{ $reservation->menu }}"
                    required>
            </div>
            <div class="form-group">
                <label for="room">Room</label>
                <select class="form-control" id="room" name="room" required>
                    @foreach ($rooms as $room)
                        <option value="{{ $room }}" {{ $reservation->room == $room ? 'selected' : '' }}>
                            {{ $room }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Reservation</button>
        </form>
    </div>
@endsection
