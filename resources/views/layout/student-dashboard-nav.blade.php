<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('images/logo.png') }}" type="image/png" rel="icon">
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <link href="{{asset('fontawesome/css/all.min.css')}}" rel="stylesheet">
    <title>student dashboard- Daaril Ulumi</title>
    <style>
        body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }
    h1{
  margin-left: 500px;
}
        .user-photo {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 8px;
        }
        .attendance-container {
      max-width: 600px;
      margin: auto;
      margin-top: 30px ;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    .present {
      color: green;
    }

    .absent {
      color: red;
    }
    .permitted{
      color: blue;
    }
    </style>
    <title>student Dashboard</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-secondary sticky-top">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="{{asset('images/logo.png')}}" alt="Logo" style="width:50px; heigh:70px;"> </img> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('student.dashboard')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('student.attendance')}}"> attendance</a>
              </li>
             
            </ul>


            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
               
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Fee</a>
                  
                  
                
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{route('student.monthly_fee.index')}}">Monthly Fee</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <li><a class="dropdown-item" href="{{route('student.weekly_fee.index')}}">weekly Fee</a></li>
                </li>

                 
                </ul>
              </li>
            </ul>

            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
               
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  
                  <img src="{{ asset(Auth::user()->image) }}" alt="User Photo" class="user-photo">
                  {{Auth::user()->name}}
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{route('student.student_profile.index')}}">Profile</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="dropdown-item" type="submit" id="logout-form">Sign out</button>
                </form>
                </li>

                 
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      @yield('content')
      <div class="container">
      <footer class="bg-secondary text-white mt-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="text-dark">About Us</h5>
                    <p>Madrasatu Daarul Ulumi Ni madrasa inayo shugulika na kufundisha watoto wakiislaam wakike na wakiume katika marhala ya ibtidaaiyya mpaka mutawassitwa,</p>
                </div>
                <div class="col-md-4">
                    <h5  class="text-dark">Contact</h5>
                    <ul class="list-unstyled ">
                        <li><a href="#" class="text-white text-decoration-none">badrually25@gmail.com</a></li>
                        <li><a href="#" class="text-white text-decoration-none">+255 654 815 515</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Mtaa wa amani <br>Mtoni kwa kabuma<br>Temeke, Dar es salaam</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="text-dark">Follow Us</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="text-white"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="text-white"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <div class="text-center bg-dark text-primary py-3">
            <p>&copy; 2024 Daaril Ulumi. All Rights Reserved.</p>
           <i> <p>Designed and developed by: Waziri A. Mussa</p>
            <p>email: wmussa55@gmail.com</p>
            <p>Contact: +255 627 370 387</p></i>
        </div>
    </footer>
  </div>
</body>
</html>