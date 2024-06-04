<div class="row">
   

    <nav class="navbar navbar-expand-lg bg-body-secondary sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="{{asset('images/logo.png')}}" alt="Logo" style="width:50px; heigh:70px;"> </img> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('staff')}}"> Staff</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="#"> About Us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>

            <li class="nav-item btn-group">
    
       
              <a href="{{ route('login') }}" type="button" class="btn btn-primary btn-toggle">Login</a>
      
         
      
          <a href="{{ route('register') }}" type="button" class="btn btn-warning btn-toogle">Register</a>
          
          </li>

          </ul>


          
            </li>
          </ul>

          
        </div>
      </div>
    </nav>
   

    