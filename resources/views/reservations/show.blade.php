@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Reservation Details</h2>

    <div class="card">
        <div class="card-header">
            Reservation Information
        </div>
        <div class="card-body">
            <h5 class="card-title">Reservation ID: {{ $reservation->id }}</h5>

            <p><strong>Room:</strong> {{ $reservation->room->name }}</p>
            <p><strong>Date:</strong> {{ $reservation->reservation_date }}</p>
            <p><strong>Start Time:</strong> {{ $reservation->start_time }}</p>
            <p><strong>End Time:</strong> {{ $reservation->end_time }}</p>
            <p><strong>Status:</strong> {{ ucfirst($reservation->status) }}</p>

            @if($reservation->status === 'pending')
                <div class="alert alert-warning">
                    This reservation is still pending approval by the admin.
                </div>
            @elseif($reservation->status === 'confirmed')
                <div class="alert alert-success">
                    Your reservation has been confirmed.
                </div>
            @elseif($reservation->status === 'rejected')
                <div class="alert alert-danger">
                    Your reservation has been rejected.
                </div>
            @endif

            <a href="{{ route('reservations.index') }}" class="btn btn-secondary">Back to My Reservations</a>
        </div>
    </div>
</div>
@endsection
