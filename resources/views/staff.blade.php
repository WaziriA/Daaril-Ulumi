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
    <title>Staff-Daaril Ulumi</title>
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
    width: 380px;
    border-radius: 25px;
    background-color: #fff;
    padding: 40px;
    margin-top: 30px;
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
        width: 360px;
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
                      <a class="nav-link active" href="{{route('staff')}}"> Staff</a>
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

<div class="container">
    <div class="row">
        <div class="d-grid d-flex justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <h1>DAARIL ULUMI STAFFS</h1>
            </div>
        </div>
    </div>
</div>
<div class="doc">
<div class="slide-container1">
    <div class="slide-content1">
        <div class="card-wrapper1">
            <div class="card1">
                <div class="image-content1">
                    <span class="overlay"></span>

                    <div class="card-image1">
                        <img src="{{asset('images/badru.jpg')}}" alt="staff1" class="card-img1">
                    </div>
                </div>
                <div class="card-content1">
                    <h2 class="name1">Shekh Badru Ali Mgomi</h2>
                    Founder & Head of madrasa
                    <p class="description1">Contact: +255 654 815 515</p>
                    <p></p>
                    <div class="social-links1">
                        <a href="https://www.facebook.com/badrumgomi" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.twitter.com/badru18689" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/+255654815515" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    

    
        <div class="card-wrapper1">
            <div class="card1">
                <div class="image-content1">
                    <span class="overlay"></span>

                    <div class="card-image1">
                        <img src="{{asset('images/halifa.jpg')}}" alt="staff1" class="card-img1">
                    </div>
                </div>
                <div class="card-content1">
                    <h2 class="name1">Halifa Said</h2>
                     Former student & assistant Teacher
                    <p class="description1">Contact: +255 699 483 005</p>

                    <div class="social-links1">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>


        <div class="card-wrapper1">
            <div class="card1">
                <div class="image-content1">
                    <span class="overlay"></span>

                    <div class="card-image1">
                        <img src="{{asset('images/udu.jpg')}}" alt="staff1" class="card-img1">
                    </div>
                </div>
                <div class="card-content1">
                    <h2 class="name1">Mahmoud Idd Sura</h2>
                    Advisor
                    <p>Currently:<i> Taking BCs in Medicine</i></p>
                    <p class="description1">Contact: +255 789 175 131</p>
                    
                    <div class="social-links1">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-wrapper1">
            <div class="card1">
                <div class="image-content1">
                    <span class="overlay"></span>

                    <div class="card-image1">
                        <img src="{{asset('images/wazir.jpg')}}" alt="staff1" class="card-img1">
                    </div>
                </div>
                <div class="card-content1">
                    <h2 class="name1">Waziri A. Mussa</h2>
                     Web developer & Advisor
                     <p>Currently:<i> Taking BCs in IT</i></p>
                    <p class="description1">Contact: +255 629 393 087</p>

                    <div class="social-links1">
                        <a href="https://www.facebook.com/realclassicprincewazirjr"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="https://wa.me/+255654815515"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card-wrapper1">
            <div class="card1">
                <div class="image-content1">
                    <span class="overlay"></span>

                    <div class="card-image1">
                        <img src="{{asset('images/saidi.jpg')}}" alt="staff1" class="card-img1">
                    </div>
                </div>
                <div class="card-content1">
                    <h2 class="name1">Said Abdallah Said</h2>
                      Advisor
                     <p>Currently:<i> Bussinessman</i></p>
                    <p class="description1">Contact: +255 748 413 995</p>

                    <div class="social-links1">
                        <a href="https://www.facebook.com/Abouyasaar" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.twitter.com/Abouyasaar" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/Abouyasaar" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/+255748413995" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-wrapper1">
            <div class="card1">
                <div class="image-content1">
                    <span class="overlay"></span>

                    <div class="card-image1">
                        <img src="{{asset('images/nawawi.jpg')}}" alt="staff1" class="card-img1">
                    </div>
                </div>
                <div class="card-content1">
                    <h2 class="name1">Nawawi Abdul-Barri</h2>
                      Advisor
                     <p>Currently:<i> Teaching at Algebra Islamic School</i></p>
                    <p class="description1">Contact: +255 689 035 401</p>

                    <div class="social-links1">
                        <a href="#"><i class="fab fa-facebook" target="_blank"></i></a>
                        <a href="https://www.twitter.com/nawawi_qudus" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/+255689035401" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
</div>

        
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
</div>



</body>
</html>