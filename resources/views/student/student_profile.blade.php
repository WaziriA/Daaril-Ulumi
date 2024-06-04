@extends('layout.student-dashboard-nav')

@section('content')

<div class="container">

    @if(session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
     {{ session('success') }}
      <button type="button" class="btn-close btn-primary" data-bs-dismiss="alert" aria-label="Close">&times;</button>
    </div>
 @endif

 @if(session()->has('error'))
 <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
    {{ session('error') }}
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
   </div>
@endif

<div class="card-body pt-3">
    <!-- Bordered Tabs -->
    <ul class="nav nav-tabs nav-tabs-bordered">

      <li class="nav-item">
        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
      </li>

      <li class="nav-item">
        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
      </li>



    </ul>
    <div class="tab-content pt-2">

      <div class="tab-pane fade show active profile-overview" id="profile-overview">
       

        <h5 class="card-title">Profile Details</h5>

        

            <div class="col-md-11 col-sm-12 col-lg-8 mt-4 card">
                <div class="card-body">
                <table class="table table-success table-striped mt-4">
                  <caption style="text-align: center; color:blue;">Student Information</caption>
                    <thead>
                      <tr>
                        
                        <th scope="col">Full Name:</th>
                        <td>{{Auth::user()->name}}</td>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Email:</th>
                        <td>{{Auth::user()->email}}</td>
                        
                      </tr>
                      <tr>
                        <th scope="row">Date of Birth:</th>
                        <td>{{Auth::user()->date_of_birth}}</td>
                        
                      </tr>
                      <tr>
                        <th scope="row">Physical Address:</th>
                        
                        <td>{{Auth::user()->physical_address}}</td>
                       
                      </tr>


                      <tr>
                        <th scope="row">Nationality:</th>
                        
                        <td>Tanzanian</td>
                       
                      </tr>

                      <tr>
                        <th scope="row">Organizaion</th>
                        
                        <td>Daaril Ulumi</td>
                       
                      </tr>

                       <tr>
                        <th scope="row">Phone:</th>
                        
                        <td>{{Auth::user()->phone_no}}</td>
                       </tr>

                       <tr>
                        <th scope="row">Position:</th>
                        
                        <td>Student</td>
                       
                      </tr>
          
                       <tr>
                        <th scope="row">Session:</th>
                        
                        <td><button type="button" class="btn btn-success btn-sm">{{Auth::user()->status}}</button></td>
                       </tr>
                    </tbody>
                  
                </table>
            </div>
            </div>
        
      

      </div>

      <div class="tab-pane fade profile-edit pt-3 card" id="profile-edit">
        <h5 class="card-title">Update Details</h5>

        <div class="card-body">
        <!-- Profile Edit Form -->
        <form action="{{route('student.student_profile.update')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row mb-3">
            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
            <div class="col-md-4 col-lg-6">
              <img src="{{ asset(Auth::user()->image) }}" alt="Profile" style= "width:274px; height:343px;">
              <div class="pt-2">
                
                <input type="file" class="btn btn-primary btn-sm form-control" name="image" title="Upload new profile image" >
              
              </div>
            </div>
          </div>

          <div class="row mb-3">
            <label for="name" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
            <div class="col-md-4 col-lg-6">
              <input name="name" type="text" class="form-control" id="name" value="{{old('name')}}">
            </div>
          </div>

          <div class="row mb-3">
            <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
            <div class="col-md-4 col-lg-6">
              <input name="email" type="email" class="form-control" id="email" >
            </div>
          </div>

          <div class="row mb-3">
            <label for="physical_address" class="col-md-4 col-lg-3 col-form-label">Physical Address</label>
            <div class="col-md-4 col-lg-6">
              <input name="physical_address" type="text" class="form-control" id="physical_address" value="{{old('physical_address')}}">
            </div>
          </div>

          <div class="row mb-3">
            <label for="phone_no" class="col-md-4 col-lg-3 col-form-label">Phone Number</label>
            <div class="col-md-4 col-lg-6">
              <input name="phone_no" type="number" class="form-control" id="phone_no" value="{{old('phone_no')}}">
            </div>
          </div>

          <div class="row mb-3">
            <label for="date_of_birth" class="col-md-4 col-lg-3 col-form-label">Date of Birth</label>
            <div class="col-md-4 col-lg-6">
              <input name="date_of_birth" type="date" class="form-control" id="date_of_birth" >
            </div>
          </div>

          
          <div class="row mb-3">
            <label for="current_password" class="col-md-4 col-lg-3 col-form-label">Current Password:</label>
            <div class="col-md-4 col-lg-6">
              <input name="current_password" type="password" class="form-control" id="current_password" >
            </div>
          </div>

          <div class="row mb-3">
            <label for="password" class="col-md-4 col-lg-3 col-form-label">New Password:</label>
            <div class="col-md-4 col-lg-6">
              <input name="password" type="password" class="form-control" id="password" >
            </div>
          </div>

          <div class="row mb-3">
            <label for="password_confirmation" class="col-md-4 col-lg-3 col-form-label">Current Password:</label>
            <div class="col-md-4 col-lg-6">
              <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" >
            </div>
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </div>
        </form>
    </div>
      </div>



      </div>

</div><!-- End Bordered Tabs -->
</div> 
@endsection