@extends('layout.student-dashboard-nav')

@section('content')
    

      <div class="container">

      @if(session()->has('success'))
         <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
         </div>
     @endif

  
  

<div class="row">
  <div class="d-grid d-md-flex d-sm-block justify-content-center mt-4">
     <div class="col-md-4 col-sm-12 ">
      <h3>Student photo</h3>
      <p>
        <img src="{{ asset(Auth::user()->image) }}"  class="mt-4" alt="student photo" style="width: 274px; height: 343px;">
     </div>
     <div class="col-md-4 col-sm-12 mt-4">
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
              <th scope="row">Phone:</th>
              
              <td>{{Auth::user()->phone_no}}</td>
             </tr>

             <tr>
              <th scope="row">Status:</th>
              
              <td><button type="button" class="btn btn-success btn-sm">{{Auth::user()->status}}</button></td>
             </tr>
          </tbody>
        
      </table>
     </div>
    </div>
</div>

@endsection