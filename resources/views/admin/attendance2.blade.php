@extends('layout.dashboard-nav')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 col-sm-10">
        @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
        </div>
        @endif

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
        </div>
        @endif
    </div>
</div>

<div class="d-grid d-md-flex d-sm-block justify-content-center mt-2">
    <div class="container">
        <div class="d-grid d-md-flex d-sm-block justify-content-center align-content-center">

            <form class="form-inline mb-5" action="#" method="GET">
                <div class="form-group mr-4">
                    <label for="search_name" class="mr-2">Name:</label>
                    <input type="text" class="form-control mr-4" name="search_name" id="search_name" placeholder="write a name here...">
                    
                </div>
               
                <button type="submit" class="btn btn-primary mt-2">Search</button>
            </form>

            

       
        
    </div>
    </div>
    

    
</div>
<br>

<hr>



@if (isset($attendances) && $attendances->count() > 0)
<table class="table table-bordered">
    <thead  style="background-color: #333; color: white;">
        <tr>
            <th>S/No</th>
            <th>Name</th>
            <th>Date</th>
            <th>Taken at</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @php
        $counter = 1;
        @endphp
        @foreach ($attendances->slice(0,30) as $attendance)
        <tr>
            <td>{{ $counter++ }}</td>
            <td>{{ $attendance->user->name }}</td>
            <td>{{ \Carbon\Carbon::parse($attendance->date)->format('d/m/Y (l)') }}</td>
            <td>{{ \Carbon\Carbon::parse($attendance->created_at)->format('d/m/Y (l) H:i:A') }}</td>
            
            <td>{{ $attendance->status }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<p>No attendance records found for the search criteria.</p>
@endif

<div class="mt-4">
    {{ $attendances->appends(request()->query())->links() }}
</div>


@endsection
