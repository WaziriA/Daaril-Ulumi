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
    <style>
.doc{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #efefef;
    margin-top: 20px;
}
h1{
    margin-left: 200px;
}
.slide-container1{
    max-width: 1120px;
    margin-bottom: 20px;
}
.slide-content1{
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    max-width: 800px;
}
.card1{
    width: 320px;
    border-radius: 25px;
    background-color: #fff;
    padding: 40px;
}
.image-content1,
.card-content1{
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 10px 14px;
}
.image-content1{
    position: relative;
    row-gap: 5px;
    padding: 25px 0;
}

.card-image1{
    position: relative;
    height: 150px;
    width: 150px;
    border-radius: 50%;
    background-color: #fff;
    padding: 3px;
}
.card-image1 .card-img1{
    height: 100%;
    width: 100%;
    object-fit: cover;
    border-radius: 50%;
    border: 4px solid #4070f4;
}
.name1{
    font-size: 18px;
    font-weight: 500;
    color: #333;
}
.description1{
    font-size: 14px;
    margin-top: 5px;
    margin-bottom: 10px;
    color: blue;
    text-align: center;
}

.social-links1 {
    display: flex;
    justify-content: center;
}
.social-links1 a{
    display: inline-block;
    color: #333;
    margin-right: 10px;
    font-size: 20px;
    text-decoration: none;
    transition: transform 0.3s;
}
.social-links1 a:hover {
    transform: scale(1.5);
} 

@media(max-width:760px){
    .slide-content1{
        margin: 0 auto;
        display: block;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        max-width: 800px;
        margin-top: 25px;
    }
    .card1{
        width: 270px;
        border-radius: 20px;
        background-color: #fff;
        padding: 30px;
        margin-top: 20px;
    }
    h1{
    margin-left: 0;
}
}
    </style>
</head>
<body>
    <div class="container">

       @include('layout.nav')
           
        
            

    @yield('content')

    </div>

    <div class="container">
        <footer class="bg-secondary text-white mt-5">
          <div class="container py-4">
              <div class="row">
                  <div class="col-md-4">
                      <h5>About Us</h5>
                      <p>Madrasatu Daarul Ulumi Ni madrasa inayo shughulika na kufundisha watoto wakiislaam wakike na wakiume katika marhala ya ibtidaaiyya mpaka mutawassitwa,</p>
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

