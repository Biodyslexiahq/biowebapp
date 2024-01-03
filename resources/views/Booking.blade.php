<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!--BOOTSTRAP IMPLEMENTATION-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <!--BOOTSTRAP IMPLEMENTATION-->
        <!--FONT AWESOME IMPLEMENTATION-->
        <script src="https://kit.fontawesome.com/a176545576.js" crossorigin="anonymous"></script>
        <!--FONT AWESOME IMPLEMENTATION-->
        <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}"/>
        <!--SWIPER JS IMPLEMENTATION-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <title>BioDyslexia</title>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
     <!--NAVBAR IMPLEMENTATION-->
     <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <div class="container">
                <!--NAVBAR LOGO-->
              <a class="navbar-brand" style="font-family: 'Comic Sans MS', cursive, sans-serif;" href="#">BioDyslexia</a>
              <!--NAVBAR BUTTON-->
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <!--SIDEBAR-->
              <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <!--SIDEBAR HEADER-->
                <div class="offcanvas-header text-white border-bottom shadow-none">
                  <h5 class="offcanvas-title " id="offcanvasNavbarLabel">BIOHOME</h5>
                  <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <!--SIDEBAR BODY-->
                <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
                  <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item mx-2 ">
                      <a class="nav-link text-white" href="/Aboutus">About</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="/Programs">Programs</a>
                      </li> 
                      <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="/Booking">Booking</a>
                      </li>
                  </ul>
                  <!--LOGIN / SIGNUP PAGE-->
                  <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3 text-white">
                    @if (Route::has('login'))
                    <livewire:welcome.navigation />
                     @endif
                  </div>
                </div>
              </div>
            </div>
          </nav>

          <!--Booking System Start here-->
          <div class="container w-100 vh-100 d-flex justify-content-center align-items-center">
        <div class="row border rounded-5 p-3 bg-white shadow box-area ">
            <div class="col-md-6 rounded-5 d-flex justify-content-center align-items-center flex-column left-box2">
                <div class="Register-image">
                    <img src="images/signimg.jpg" class="img-fluid" style="width: 420px; height: 300px;">
                </div>
            </div>
            <div class="col-md-6 right-box2">
                <div class="row align-items-center">
                    <div class="register-header-text">
                        <p class="text-wrap text-center hovertext2" style="font-family: Poppins;">Fill the appointment form!</p>
                    </div>
                     <!--Booking System Start here-->
          <form action="" method="post" class=" container d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
            <div class="mb-3 ">
                <label for="Guardianformcontrol" class="form-label " style="font-family:Chewy;">Parents or Guardian Name :</label>
                <input type="text" class="form-control" id="Guardianformcontrol" placeholder="Parent name here">
                <div class="mb-3 ">
                <label for="Studentformcontrol" class="form-label " style="font-family:Chewy;">Student's Name :</label>
                <input type="text" class="form-control" id="Studentformcontrol" placeholder="Student name here">
                </div>
                <div class="mb-3 ">
                <label for="Studentageformcontrol" class="form-label " style="font-family:Chewy;">Student's Age :</label>
                <input type="number" class="form-control" id="Studentageformcontrol" placeholder="Student Age here">
                </div>
                <div class="mb-3 ">
                <label for="Addressformcontrol" class="form-label " style="font-family:Chewy;">Address :</label>
                <input type="text" class="form-control" id="Addressformcontrol" placeholder="Address here">
            </div>
            <div class="mb-3 ">
                <label for="Contactnumformcontrol" class="form-label " style="font-family:Chewy;">Contact Number :</label>
                <input type="number" class="form-control" id="Contactnumformcontrol" placeholder="Contact Number here">
            </div>
            <div class="mb-3 ">
                <label for="Emailformcontrol" class="form-label " style="font-family:Chewy;">Email :</label>
                <input type="email" class="form-control" id="Emailformcontrol" placeholder="Email@here">
            </div>
            <div class="mb-3">
            <a href="/Booking2"> 
                <button type="button" class="btn btn-outline-primary d-grid gap-2 col-12">Continue</button></a>
            </div>
          </form>
            </div>
        </div>
      </div>
</body>
</html>