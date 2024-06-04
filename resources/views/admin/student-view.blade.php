@extends('layout.dashboard-nav')

@section('content')

<div class="row">
  <div class="d-grid d-md-flex d-sm-block justify-content-center mt-4">
    <div class="col-md-4 col-sm-12 ">
      <h3>Student photo</h3>
      <p>
        <img src="{{asset($user->image)}}" class="mt-4" alt="student photo" style="width: 274px; height: 343px;">
      </p>
    </div>
    <div class="col-md-8 col-sm-12 mt-4">
      <table class="table table-success table-striped mt-4">
        <caption style="text-align: center; color:blue;">Student Information</caption>
        <thead>
          <tr>
            <th scope="col">Full Name:</th>
            <td>{{$user->name}}</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Email:</th>
            <td>{{$user->email}}</td>
          </tr>
          <tr>
            <th scope="row">Date of Birth:</th>
            <td>{{$user->date_of_birth}}</td>
          </tr>
          <tr>
            <th scope="row">Physical Address:</th>
            <td>{{$user->physical_address}}</td>
          </tr>
          <tr>
            <th scope="row">Phone:</th>
            <td>{{$user->phone_no}}</td>
          </tr>
          <tr>
            <th scope="row">Status:</th>
            <td><button type="button" class="btn btn-success btn-sm">{{$user->status}}</button></td>
          </tr>
        </tbody>
      </table>

      <!-- Attendance Section -->
            <div class="card mt-4">
                <div class="card-header  d-flex justify-content-between  py-3">
                  <h5 class="card-title text-align-center m-0">Attendance</h5>
                  <form class="form-inline" method="GET" action="{{ route('admin.student-view', $user->id) }}">
                    <div class="form-group mx-sm-3 mb-2">
                      <label for="searchMonth" class="sr-only">Search Month</label>
                      <input type="month" class="form-control" id="searchMonth" name="searchMonth" value="{{ request()->get('searchMonth') }}">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Search</button>
                  </form>
                </div>
                <div class="card-body pt-0">
                  @if (isset($attendances) && count($attendances) > 0)
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">Date</th>
                          <th scope="col">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($attendances->slice(0, 5) as $attendance)
                          <tr>
                            <td>{{ $attendance->date }}</td>
                            <td>{{ $attendance->status }}</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                    @if (count($attendances) > 5)
                      <p class="text-center">
                        Showing only the first 5 entries. Total entries: {{ count($attendances) }}
                      </p>
                    @endif
                  @else
                    <p class="text-center">No attendance data found for this student.</p>
                  @endif
                </div>
              </div>
        
              <!-- Monthly Fee Section -->
              <div class="card mt-4">
                <div class="card-header mb-0">
                  <h5 class="card-title">Monthly Fee</h5>
                </div>
                <div class="card-body mt-0">
                  @if (isset($Fees) && count($Fees) > 0)
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">Month</th>
                          <th scope="col">Amount</th>
                          <th scope="col">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($Fees as $Fee)
                          <tr>
                            <td>{{ $Fee->month }}</td>
                            <td>{{ $Fee->amount }}/=</td>
                            <td>{{ $Fee->status }}</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  @else
                    <p class="text-center">No monthly fee data found for this student.</p>
                  @endif
                </div>
              </div>
        
              <!-- Weekly Fee Section -->
              <div class="card mt-4">
                <div class="card-header mb-0">
                  <h5 class="card-title">Weekly Fee</h5>
                </div>
                <div class="card-body">
                  @if (isset($Accomodates) && count($Accomodates) > 0)
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">Day</th>
                          <th scope="col">Amount</th>
                          <th scope="col">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($Accomodates->slice(0,10) as $Accomodates)
                          <tr>
                            <td>{{ $Accomodates->formatted_payment_date }}</td>
                            <td>{{ $Accomodates->amount }}</td>
                            <td>{{ $Accomodates->status }}</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  @else
                    <p class="text-center">No weekly fee data found for this student.</p>
                  @endif
                </div>
              </div>
        
            </div>
          </div>
        </div>
        
        @endsection