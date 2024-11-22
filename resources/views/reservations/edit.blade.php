@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Reservation</h2>

    <form action="{{ route('update.reservation', $reservation->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- HTTP method PUT for updating -->
        
        <div class="form-group">
            <label for="id_room">Room</label>
            <select name="id_room" id="id_room" class="form-control" required>
                <option value="">Select a Room</option>
                @foreach ($rooms as $room)
                    <option value="{{ $room->id }}" {{ $room->id == $reservation->id_room ? 'selected' : '' }}>{{ $room->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="reservation_date">Reservation Date</label>
            <input type="date" name="reservation_date" id="reservation_date" class="form-control" value="{{ $reservation->reservation_date }}" required>
        </div>

        <div class="form-group">
            <label for="start_time">Start Time</label>
            <input type="time" name="start_time" id="start_time" class="form-control" value="{{ $reservation->start_time }}" required>
        </div>

        <div class="form-group">
            <label for="end_time">End Time</label>
            <input type="time" name="end_time" id="end_time" class="form-control" value="{{ $reservation->end_time }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Reservation</button>
    </form>
</div>
@endsection
