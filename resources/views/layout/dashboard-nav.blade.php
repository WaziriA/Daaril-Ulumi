<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Teacher Dashboard - Daaril Ulumi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('images/logo.png') }}" type="image/png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/simple-datatables/style.css')}}" rel="stylesheet">
  <link href="{{asset('cc/admin-tables.css')}}" rel="stylesheet">
  <link href="{{asset('fontawesome/css/fontawesome.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 7 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>

.admin{
        text-align: center;
        color: blue;
        font-size: 18px;
        font-family: Arial, Helvetica, sans-serif;
    }
    .cards{
    margin-top: 20px;
    width: 100%;
    padding: 35px 20px;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 20px;
}
.cards .card{
   background: linear-gradient(45deg, #47cebe, #ef4a82); 
   padding: 20px;
   display: flex;
   align-items: center;
   justify-content: space-between;
   box-shadow: 0 4px 8px o rgba(0, 0, 0, 0.4);
}
.number{
    font-size: 35px;
    font-weight: 500;
    color: #fff;
}
.card-name{
    color: #444;
    font-weight: 600;
}
.icon-box i{
    font-size: 45px;
}
    .tables{
 width: 100%;
 display: grid;
 grid-template-columns: 2fr 1fr; 
 grid-gap: 20px;  
 align-items: self-start;
 padding: 0 20px 20px 20px;
}
.img-box-smail{
  position: relative; 
   width: 40px;
   border-radius: 50%;
   overflow: hidden;
}
.last-appointment 
 {
    min-height: 350px;
    background: #fff;
    padding: 20px;
    box-shadow: 0 4px 8px o rgba(0, 0, 0, 0.2);
    margin left: 10px;
}
.doctor-visiting{
    min-height: 350px;
    background: #fff;
    padding: 20px;
    margin-right: 20px;
    box-shadow: 0 4px 8px o rgba(0, 0, 0, 0.4);
}
.heading{
display: flex;
align-items: center;
justify-content: space-between;
color: #444;
}
.btn1{
    padding:  5px 10px;
     background: linear-gradient(45deg, #47cebe, #ef4a82) ;
     color:#fff;
     text-decoration: none;
     text-align: center;
}
table{
    margin-top:  10px;
    width: 100%;
    border-collapse: collapse; 
}
/*thead td{
    font-weight: 600;
    color: #333;
    background-color: dimgray;
}*/
thead{
  background-color: #444;
  color: whitesmoke;
  font-weight: 600;
}
table tr{
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}
tbody tr:hover{
    background:#444 ;
    color: #fff;
}
table tbody tr:last-child{
    border-bottom: none;
}
td{
    padding: 9px 5px;
}
td i{
    padding: 7px;
    color:#444;
    border-radius: 50px ;
}
.last-appointment table tbody td:last-child{
white-space: nowrap;
}
.bi-eye{
    background: #32bea6;
    cursor: pointer;
}
.bi-pencil{
    background: #63b4f4;
    cursor: pointer;
}
.bi-trash{
    background: #ed5564;
    cursor: pointer;
}
select{
    font-size: 24px;
    border-radius: 5%;
    width: 200px;
    height: 40px;
}
button{
    background-color: blue;
    color: #fff;
    font-size: 18px;
    padding: 5px;
    border-radius: 18%;
    cursor: pointer;
}

button{
            size: 15px;
            margin-left: 30px;
            height: 40px;
        }
        /* Modal Styles */
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 9999;
}

.modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    width: 50%;
}

.close {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
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

@media (max-width:1090px){
    .sidebar1{
        width: 60px;
    }
    .main{
        width: calc(100% - 60px);
        left: 60px;
    }
    .top-bar{
        width: calc(100% - 60px);
    }
}
@media (max-width:860px){
.cards{
  grid-template-columns: repeat(2, 1fr);  
}
.tables{
    grid-template-columns: 1fr ;
}
.modal-content {
    width: 80%;
}
}
@media (max-width:530px){
    .cards{
        grid-template-columns: 1fr;
    }
    .last-appointment td:nth-child(3){
        display: none;
    }
    .modal-content {
    width: 100%;
}
}
@media (max-width:1090px){
    .last-appointment .doctor-visiting{
     font-size: 70px;
     padding: 10px; 
     min-height: 200px;  
    }
    .cards, .tables{
        padding: 10px;
    }
    .search input{
        padding: 0 10px;
    }
    .user{
       width: 40px;
        height: 40px;
    }
}
   
    @media screen and (max-width: 768px) {
        .sidebar1 {
            width: 20%;
        }

        .content {
            width: 80%;
        }
       
      .sidebar1 a span {
            display: none;
       }
       .heading{
        display: none;
       }
}
  </style>
</head>

<body>


   
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">DaarilUlumi</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

  <!--  <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="#" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div> End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">0</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              No Notification
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>.....</h4>
                
              </div>
            </li>

            

           

           

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">0</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              No messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>.......</h4>
                  
              </a>
            </li>
            

            
           
            
            

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ asset(Auth::user()->image) }}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::user()->name}}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{Auth::user()->name}}</h6>
              <span>Teacher</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route('admin.profile.index')}}">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}">
                <i class="bi bi-box-arrow-right"></i>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="dropdown-item" type="submit" id="logout-form">Sign out</button>
                </form>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('admin.dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link "  href="{{route('admin.student')}}">
            <i class="bi bi-person"></i><span>Student</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link "  href="{{route('admin.attendance_view')}}">
            <i class="bi bi-check2-square"></i></i><span>Attendance</span>
        </a>
    </li>
     


    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-currency-dollar"></i><span>Fee</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a class="nav-link "  href="{{route('admin.fee.index')}}">
              <i class="bi bi-currency-dollar"></i><span>Monthly Fee</span>
          </a>
  
      </li>

       <li>
          <a class="nav-link "  href="{{route('admin.weekly_fee.index')}}">
              <i class="bi bi-currency-dollar"></i><span>Weekly Fee</span>
          </a>
  
      </li>
        
      </ul>
    </li><!-- End Fee Nav -->






     
 
      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin.profile.index')}}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

     

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    
    @yield('content')
         
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Daaril-Ulumi</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by HaziriTech Solution
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{ asset('css/bootstrap.min.css') }}"></script>
  <script src="{{asset('vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>
  <script src="{{asset('js/bootstrap.bundle.js')}}"></script>

</body>

</html>