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

            <form class="form-inline mb-5" action="{{ route('admin.attendance_view') }}" method="GET">
                <div class="form-group mr-4">
                    <label for="search" class="mr-2">Month:</label>
                    <input type="month" class="form-control mr-4" name="search" id="search">
                </div>
               
                <button type="submit" class="btn btn-primary mt-2">Search</button>
            </form>

            

        @if (auth()->user()->is_admin && auth()->user()->is_admin == 2)
        <form class="form-inline ml-4" style="margin-left: 10px">
            <div class="form-group ml-4">
                <label for="class" class="ml-4">Select Class:</label>
                <select class="form-control ml-4" name="class" id="class">
                    <option value="#">....select......</option>
                    <option value="class1">Class 1</option>
                    <option value="class2">Class 2</option>
                </select>
            </div>

            <button type="button" id="fetch-users-btn" class="btn btn-success mt-2">Acquire Students</button>
        </form>
        @endif
        
    </div>
    </div>
    

    <!--<button type="button" class="btn  btn-secondary mt-4 hover-btn-new log orange" id="openModalButton">Take Attendance</button>-->
</div>
<br>

<hr>

@include('admin.make_attendance')

@if (isset($attendances) && $attendances->count() > 0)
<div class="card">
    <div class="card-body">
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

<button type="button" class="btn btn-sm btn-success text-white">
    <a href="{{ route('admin.attendance2.index', ['search' => request('search')]) }}" class="text-white" >View All</a>
</button>

</div>
</div>

<div id="user-list-modal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="modal-body">
            <h4>Students List</h4>
            <form method="POST" action="{{ route('admin.attendance.store') }}">
                @csrf
                <label>Date:</label>
                <input type="date" name="date" required><br><br>

                <table class="table table-bordered">
                    <thead>
                        <tr style="background-color: #333; color: white;">
                            <th>S/No</th>
                            <th>Name</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody id="user-list">
                        <!-- User list will be displayed here -->
                    </tbody>
                </table>

                <button type="submit" class="btn btn-primary mt-4">Submit Attendance</button>
            </form>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    // AJAX function to fetch users based on selected class
    function fetchUsers(classValue) {
        $.get('/fetch-users', { class: classValue }, function(data) {
            $('#user-list').empty(); // Clear existing list
            $.each(data.users, function(index, user) {
                $('#user-list').append(`
                    <tr>
                        <td>${index + 1}</td>
                        <td>${user.name}</td>
                        <td>
                            <input type="radio" name="status[${user.id}]" value="present" required> Present
                            <input type="radio" name="status[${user.id}]" value="absent"> Absent
                            <input type="radio" name="status[${user.id}]" value="permitted"> Permitted
                        </td>
                    </tr>
                `);
            });
            $('#user-list-modal').show(); // Show modal with user list
        });
    }

    $(document).ready(function() {
        $('#fetch-users-btn').click(function() {
            var selectedClass = $('#class').val();
            fetchUsers(selectedClass);
        });

        $('.close').click(function() {
            $('#user-list-modal').hide(); // Close modal when close button is clicked
        });
    });
</script>

<script>
    // Get the modal and the button that opens it
   /* var modal = document.getElementById("myModal");
    var btn = document.getElementById("openModalButton");
    var closeBtn = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on the close button, close the modal
    closeBtn.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }*/
</script>

@endsection
