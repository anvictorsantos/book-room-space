@extends('layouts.app')

@section('content')
<div class="container">
    <h2>My Reservations</h2>

    <table class="table">
        <thead>
            <tr>
                <th>Room</th>
                <th>Date</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
            <tr>
                <td>{{ $reservation->room ? $reservation->room->name : 'Sem Sala' }}</td>
                <td>{{ $reservation->date }}</td>
                <td>{{ $reservation->start_time }}</td>
                <td>{{ $reservation->end_time }}</td>
                <td>{{ ucfirst($reservation->status) }}</td>
                <td>
                    @if($reservation->status === 'pending')
                        @if(auth()->user()->user_type === 'Admin')
                            <!-- Admin can confirm the reservation -->
                            <form action="{{ route('confirm.reservation', $reservation->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-success">Confirm Reservation</button>
                            </form>
                        @endif

                        <!-- All users can cancel their reservation -->
                        <form action="{{ route('cancel.reservation', $reservation->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-danger">Cancel Reservation</button>
                        </form>
                    @elseif($reservation->status === 'canceled')
                        <span class="text-muted">Reservation Canceled</span>
                    @elseif($reservation->status === 'confirmed')
                        <span class="text-success">Reservation Confirmed</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
