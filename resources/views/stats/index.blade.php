@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Reservation Statistics</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Month</th>
                <th>Total Reservations</th>
                <th>Total Hours</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stats as $stat)
            <tr>
                <td>{{ $stat->month }}</td>
                <td>{{ $stat->reservations_count }}</td>
                <td>{{ $stat->total_hours }} hours</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
