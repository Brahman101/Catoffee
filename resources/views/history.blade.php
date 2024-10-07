@extends('layout.app')

@section('content')
    <div class="container">
        <h2>Your Reservation History</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Menu</th>
                    <th>Room</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $reservation)
                    <tr>
                        <td>{{ $reservation->menu }}</td>
                        <td>{{ $reservation->room }}</td>
                        <td>{{ $reservation->created_at->format('Y-m-d H:i') }}</td>
                        <td>
                            <a href="{{ route('reservasi.edit', $reservation->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('reservasi.destroy', $reservation->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('js')
    <script>
        console.log('Reservations:', @json($reservations));
    </script>
@endsection
