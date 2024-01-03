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
           <div class="container w-100 vh-100 d-flex justify-content-center align-items-center booking">
        <div class="row border rounded-5 p-3 bg-white shadow box-area ">
            <div class="col-md-6 rounded-5 d-flex justify-content-center align-items-center flex-column left-box2">
                <div class="Register-image">
                    <img src="images/signimg.jpg" class="img-fluid" style="width: 420px; height: 300px;">
                </div>
            </div>
            <div class="col-md-6 right-box2">
                <div class="row align-items-center">
                    <div class="register-header-text">
                        <p class="text-wrap text-center hovertext2" style="font-family: Poppins;">Almost there!</p>
                    </div>

                    <!--Booking System Start here-->
                    <form action="" method="post">
                    <div class="mb-3 ">
                    <h4 class="" style="font-family:Poppins">Please Choose your date :
                
                    <p>Monday - Friday : from 11am-3pm</p>
                    <p>Saturday : 11 am only.</p>
                    <br>
                    <p>The assessment is expected to take approximately 
                    1 hour and 30 minutes to 2 hours.</p>
                    <br>
                    <p>Please Note:</p>
                    <br>
                    <p>Please check availability of the date and time chosen to <a href="https://wa.link/93mkqu">0193769940</a> (<- click).</p>
                    <br>
                    <p>Parents are kindly requested not to enter the assessment room during the assessment to ensure a focused environment for the student without any distractions.</p>
                    <br>
                    </h4>
                    <label for="Dateformcontrol" class="form-label" style="font-family:Chewy;">Date :</label>
                    <input type="date" class="form-control" id="Dateageformcontrol">
                    </div>

                    <div class="mb-3 ">
                <label for="Timeformcontrol" class="form-label" style="font-family:Chewy;">Choose your time :</label>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="Timeformcontrol1">
                <label class="form-check-label " for="Timeformcontrol1">
                 11 AM.
                </label>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="Timeformcontrol2">
                <label class="form-check-label " for="Timeformcontrol2">
                 1.30 PM.
                </label>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="Timeformcontrol3">
                <label class="form-check-label " for="Timeformcontrol3">
                 3.30 PM.
                </label>
                </div>

                <div class="mb-3 ">
                <h4 class="" style="font-family:Poppins">Assessment Fee: <br>
                <p>All payment to : City Technologies</p>
                <p>(Maybank) Account number: <mark>514075005242<mark></p>
                <br>
                <p>Assessment only : <mark>RM200<mark></p>
                <br>
                <p>With report : <mark>RM250 <mark></p>
            </h4>
            </div>

            <div class="mb-3 ">
                <label for="Assestmentformcontrol" class="form-label" style="font-family:Chewy;">Option 1 :</label>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="Assestmentformcontrol1">
                <label class="form-check-label " for="Assestmentformcontrol1">
                 Assessment only.
                </label>
            </div>
            <div class="mb-3 ">
                <label for="Assestmentformcontrol" class="form-label" style="font-family:Chewy;">Option 2 :</label>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="Assestmentformcontrol2">
                <label class="form-check-label " for="Assestmentformcontrol2">
                 Assessment+Report.
                </label>
            </div>   
            <div class="mb-3 ">
                <h4 class="" style="font-family:Poppins">Payment Option: <br>
                <p>All payment to : City Technologies</p>
                <p>(Maybank) Account number: <mark>514075005242<mark></p>
                <br>
                <p>Assessment only : <mark>RM200<mark></p>
                <br>
                <p>With report : <mark>RM250 <mark></p>
            </h4>
            </div>

            <div class="mb-3 ">
                <label for="Paymentformcontrol" class="form-label" style="font-family:Chewy;">Payment Option :</label>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="Paymentformcontrol1">
                <label class="form-check-label " for="Paymentformcontrol1">
                 Cash.
                </label>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="Paymentformcontrol1">
                <label class="form-check-label " for="Paymentformcontrol1">
                 Online Banking.
                </label>
            </div>

            <div class="mb-3">
            <a href="#"> 
                <button type="button" class="btn btn-outline-primary d-grid gap-2 col-12">Submit</button></a>
            </div>
                    </form>

</body>