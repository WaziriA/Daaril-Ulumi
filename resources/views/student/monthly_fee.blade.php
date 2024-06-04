@extends('layout.student-dashboard-nav')

@section('content')

      <div class="attendance-container">
        <h2>Monthly Fee Record</h2>
        <div class="card-body">
            <form action="{{ route('student.monthly_fee.index') }}" method="GET">
                <div class="form-group">
                    <label for="search">Search by Month:</label>
                    <input type="month" id="search" name="search" class="form-control " value="{{ request('search') }}">
                </div>
                <button type="submit" class="btn btn-primary mt-4 mb-4">Search</button>
            </form>

            @if (count($fees) > 0)
            <table>
                <thead>
                    <tr>
                        <th>Month:</th>
                        
                        <th>Amount:</th>
                        <th>Payment Date:</th>
                        <th>Received by:</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($fees as $fee)
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($fee->month)->format('m/Y') }} </td>
                        <td>{{ $fee->amount }}/=</td>
                        <td>{{ \Carbon\Carbon::parse($fee->created_at)->format('d/m/Y') }} ({{ \Carbon\Carbon::parse($fee->created_at)->format('l') }})</td>
                        <td>{{ $fee->issued_by }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-danger" role="alert">
                No Data Found! There are no fee records for {{ (isset($searchDate)) ? $searchDate->format('F Y') : 'this month' }}.
            </div>
        @endif
    </div>
    <div class="mt-4">
        {{$fees->links()}}
    </div>
</div>
    @endsection