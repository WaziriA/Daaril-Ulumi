@extends('layout.student-dashboard-nav')

@section('content')

      <div class="attendance-container">
        <h2>Weekly Fee Record</h2>
        <div class="card-body">
            <form action="{{ route('student.weekly_fee.index') }}" method="GET">
                <div class="form-group">
                    <label for="search">Search by Month:</label>
                    <input type="month" id="search" name="search" class="form-control " value="{{ request('search') }}">
                </div>
                <button type="submit" class="btn btn-primary mt-4 mb-4">Search</button>
            </form>

            @if (count($accomodates) > 0)
            <table>
                <thead>
                    <tr>
                        <th>Paid For:</th>
                        
                        <th>Amount:</th>
                        <th>Created at:</th>
                        <th>Received by:</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($accomodates as $accomodate)
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($accomodate->payment_date)->format('d/m/Y') }} ({{ \Carbon\Carbon::parse($accomodate->payment_date)->format('l') }})</td>
                        <td>{{ $accomodate->amount }}/=</td>
                        <td>{{ \Carbon\Carbon::parse($accomodate->created_at)->format('d/m/Y') }} ({{ \Carbon\Carbon::parse($accomodate->created_at)->format('l') }})</td>
                        <td>{{ $accomodate->issued_by }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-danger" role="alert">
                No Data Found!  for {{ (isset($searchDate)) ? $searchDate->format('F Y') : 'this month' }}.
            </div>
        @endif
    </div>
    <div class="mt-4">
        {{$accomodates->links()}}
    </div>
</div>

    @endsection