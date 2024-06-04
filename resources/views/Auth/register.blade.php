@extends('layout.layout')

@section('content')
    


    <div class="mt-4 row">

      @if(session()->has('error'))
         <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
          {{ session('error') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
         </div>
     @endif

        <div class="col-sm-12 col-md-6 col-lg-4 align-item-center waziri login">
     <div class="card ">
        <div class="card-hearder bg-primary p-4 text-white font-20"> REGISTER HERE</div>
        <div class="card-body justify-content-center">

            <form class="form" action="{{route('register')}}" method='POST' enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                <label for="name" class="form-label mt-2">Username</label>
                <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}">
                </div>
                <span class="text-danger">@error('name') {{$message}} @enderror</span>
                    
                
 
                <div class="form-group">
                  <label for="email" class="form-label mt-2">Email</label>
                  <input type="email" id="email" name="email" class="form-control" value="{{old('email')}}">
                </div>
                <span class="text-danger">@error('email') {{$message}} @enderror</span>

                <div class="form-group">
                  <label for="physical_address" class="form-label mt-2">physical_address</label>
                  <input type="text" id="physical_address" name="physical_address" class="form-control" value="{{old('physical_address')}}">
                </div>
                <span class="text-danger">@error('physical_address') {{$message}} @enderror</span>

                <div class="form-group">
                  <label for="phone_no" class="form-label mt-2">phone_no</label>
                  <input type="number" id="phone_no" name="phone_no" class="form-control" value="{{old('phone_no')}}">
                </div>
                <span class="text-danger">@error('phone_no') {{$message}} @enderror</span>

                <div class="form-group">
                  <label for="date" class="form-label mt-4">date_of_birth</label>
                  <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" value="{{old('date_of_birth')}}">
                </div>
                <span class="text-danger">@error('date_of_birth') {{$message}} @enderror</span>

                <div class="form-group">

                  <select name="status" id="status" class="mt-4">
                   <option value="class1">Class1</option>
                   <option value="class2">Class2</option>
                  </select>

                
            </select><br>
          </div>
                <span class="text-danger">@error('status') {{$message}} @enderror</span>

                <div class="form-group">
                  <label for="image" class="form-label mt-4"> Upload Photo:</label>
                  <input type="file" name="image" id="image">

              </div>

                <div class="form-group">
                  <label for="password" class="form-label mt-2">Password</label>
                  <input type="password" id="password" name="password" class="form-control">
                </div>
                <span class="text-danger">@error('password') {{$message}} @enderror</span>
                 
                <div class="form-group">
                    <label for="password_confimartion" class="form-label mt-2">Comfirm Password</label>
                    <input type="password" id="password_confimartion" name="password_confimartion" class="form-control" >
                </div>
                
               


                <button type="submit" value="login" class="btn btn-primary mt-4 abdallah">Register</button>
            </form>
        </div>
     </div>
    </div>
    </div>
 @endsection

    