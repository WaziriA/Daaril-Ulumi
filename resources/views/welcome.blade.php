<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('images/logo.png') }}" type="image/png" rel="icon">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('custom/custom.css') }}" rel="stylesheet">
    
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <link href="{{asset('fontawesome/css/all.min.css')}}" rel="stylesheet">
    <title>Madrasatu Daaril Ulumi</title>
</head>
     <body> 
      <div class="container">
      <nav class="navbar navbar-expand-lg bg-body-secondary sticky-top">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="{{asset('images/logo.png')}}" alt="Logo" style="width:50px; heigh:70px;"> </img> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
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
   
     <div class="row " style="margin-top: 50px">
    
      <div class="col-sm-12 col-md-6 ">

      <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('images/chuo.jpg') }}" alt="Example Image" width="100%" height="420px">
            <div class="carousel-caption">
              <h1 style="position:top-right;"></h1>
              <h3>PICHA ZA BAADHI YA WANAFUZNI </h3>
              <p>Mlete mwanao apate mafundisho bora ya dini</p>
            </div>
          </div>

          <div class="carousel-item">
            <img src="{{ asset('images/mashaf3.png') }}" alt="Example Image" width="100%" height="420px">
            <div class="carousel-caption">
              <h1 style="position:top-right;"></h1>
              <h3>KITABU KITUKUFU CHA ALLAH </h3>
              <p>Mjenge amjuye mola wake, aisome na kuijua Qur'an</p>
            </div>
          </div>

          <div class="carousel-item">
            <img src="{{ asset('images/mashaf1.jpeg') }}" alt="Example Image" width="100%" height="420px">
            <div class="carousel-caption">
              <h1 style="position:top-right;"></h1>
             
              <img src="{{ asset('images/picha.png') }}" alt="Example Image" width="100%" height="50%">
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div><br><br>

        <div class="col-sm-12 col-md-4 gap-4">
          <div class="card mt-4">
            <div class="card-header">
              <h3> UPCOMING EVENTS AND NEWS! </h3>
            </div>
           <div class="card-body">
             <p class="card-text"> Hamna taarifa mpya, tafadhali endelea kufatilia ukurasa wetu kwa taarifa zaidi zijazo.</p>
           </div>
           <div class="card-footer">3mins ago</div>
          </div>
        </div>
    
     </div>

     
      <footer class="bg-secondary text-white mt-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-4">
                    <h5>About Us</h5>
                    <p>Madrasatu Daarul Ulumi Ni madrasa inayo shugulika na kufundisha watoto wakiislaam wakike na wakiume katika marhala ya ibtidaaiyya mpaka mutawassitwa,</p>
                </div>
                <div class="col-md-4">
                    <h5>Contact</h5>
                    <ul class="list-unstyled ">
                        <li><a href="#" class="text-white text-decoration-none">badrually25@gmail.com</a></li>
                        <li><a href="#" class="text-white text-decoration-none">+255 654 815 515</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Mtaa wa amani <br>Mtoni kwa kabuma<br>Temeke, Dar es salaam</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
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