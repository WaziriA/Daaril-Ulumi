@extends('layout.student-dashboard-nav')

@section('content')

      <div class="attendance-container">
        <h2>Attendance</h2>

        <form action="{{ route('student.attendance') }}" method="GET">
            <div class="form-group">
                <label for="search">Search by Month:</label>
                <input type="month" id="search" name="search" class="form-control " value="{{ request('search') }}">
            </div>
            <button type="submit" class="btn btn-primary mt-4 mb-4">Search</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($attendances as $attendance)
                <tr>
                    <td>{{ \Carbon\Carbon::parse($attendance->date)->toFormattedDateString() }}({{ \Carbon\Carbon::parse($attendance->created_at)->format('l') }})</td>
                    <td class="{{ strtolower($attendance->status) }}">{{ ucfirst($attendance->status) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            {{ $attendances->links() }}
        </div>
    </div>
    @endsection