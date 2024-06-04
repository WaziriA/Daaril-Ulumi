@extends('layout.layout')

@section('content')
    
 <div class="mt-4 row">



  <div class="col-sm-12 col-md-6 col-lg-4 align-item-center waziri login">
          
    @if(session()->has('success'))
         <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
         </div>
     @endif

     @if(session()->has('error'))
         <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
          {{ session('error') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
         </div>
     @endif
        
     <div class="card ">
        <div class="card-hearder bg-primary p-4 text-white font-20"> Login</div>
        <div class="card-body justify-content-center">

            <form class="form" action="{{route('login')}}" method="POST">
            @csrf
                <div class="form-group">
                <label for="email" class="form-label mt-2">Email</label>
                <input type="email" id="email" class="form-control" name="email">
                </div>

                <div class="form-group">
                <label for="psassword" class="form-label mt-2">Password</label>
                <input type="password" id="password" class="form-control" name="password">
                </div>
                

                <button type="submit" value="login" class="btn btn-primary mt-4 abdallah">login</button>
                <hr>
                <p> Don't have an account?
                <a href="/register"> Register here</a>
                </p>
            </form>
        </div>
     </div>
    </div>
    </div>
 @endsection

    