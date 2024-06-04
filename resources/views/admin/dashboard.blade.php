@extends('layout.dashboard-nav')

 

    @section('content')
        
 
    


    <div class="row justify-content-center">
      <div class="col-md-8 col-sm-10">
          

  
          @if(session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                       {{ session('success') }}
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
               </div>
           @endif
      </div>
  </div>
  
  <h1 style="text-align: center">WELCOME TO DASHBOARD</h1>
  
  <div class="cards">
      <div class="card">
          <div class="card-content">
              <div class="number">{{ $totalStudents }}</div>
              <div class="card-name">Students</div>
          </div>
          <div class="icon-box">
              <i class="bx bxs-user"></i>
          </div>
      </div>
  
      <div class="card">
          <div class="card-content">
              <div class="number">Tsh {{ $totalFeeRevenue }}/=</div>
              <div class="card-name">Monthly Fee for {{ $formattedMonth }}</div>
              <div class="additional-info">
                  <div>Total Paid: {{ $totalPaidStudents }}</div>
                  <div>Total Unpaid: {{ $totalUnpaidStudents }}</div>
              </div>
          </div>
          <div class="icon-box">
              <i class="bx bxs-dollar-circle"></i>
          </div>
      </div>
  
      <div class="card">
          <div class="card-content">
              <div class="number">Tsh {{ $totalAccomodateRevenue }}/=</div>
              <div class="card-name">Weekly Fee for {{ $formattedMonth }}</div>
          </div>
          <div class="icon-box">
              <i class="bx bxs-dollar-circle"></i>
          </div>
      </div>
  
      <div class="card">
          <div class="card-content">
              <div class="number">{{ $attendancePercentage }}%</div>
              <div class="card-name">Attendance for {{ $formattedMonth }}</div>
          </div>
          <div class="icon-box">
              <i class="bx bx-calendar-check"></i>
          </div>
      </div>
  </div>
  
  <div class="d-grid d-md-flex gap-4">
      <div class="table-container">
          <h3>Students List</h3>
          <table class="visiting">
              <thead>
                  <tr>
                      <th>S/No</th>
                      <th>Photo</th>
                      <th>Name</th>
                      <th>Email</th>
                      
                  </tr>
              </thead>
              <tbody>
                @php
                  $counter = 1;
                @endphp
                  @foreach ($users->slice(0, 5) as $user)
                  <tr>
                    <td>{{$counter++}}</td>
                      <td>
                          <div class="img-box-smail">
                              <img src="{{ asset($user->image) }}" alt="photo" style="width: 30px; height: 30px;">
                          </div>
                      </td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      
                  </tr>
                  @endforeach
              </tbody>
          </table>
            <button type="button" class="btn btn-sm btn-success"><a href="{{ route('admin.student') }}" class="btn">View All</a></button>
      </div>
  
      
      <div class="table-container">
          <h3>Admins and Others List</h3>
          <table class="last-appointment">
              <thead>
                  <tr>
                    <th>S/No</th>
                      <th>Photo</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Details</th>
                  </tr>
              </thead>
              <tbody>
                  <!-- Add logic to fetch and display users where is_admin=1 or is_admin=3 -->
                  <tr>
                    <td colspan="5" style="text-align: center;"><strong>No Data Found</strong></td>
                </tr>
              </tbody>
          </table>
      </div>

      
  </div>
  
  @endsection
  
