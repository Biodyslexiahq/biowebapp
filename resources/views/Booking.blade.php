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
                <div>
                <img src="{{ URL::asset('/images/mainlogo.jpg')}}" alt="mainlogo" style="width:290px;height:80px">
                </div>
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
          <div class="container d-flex justify-content-center align-items-center">
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

                     
          <form action="submit" method="POST" class=" container d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
            @csrf
            <div class="mb-3 ">
                <label for="Guardianformcontrol" class="form-label " style="font-family:Chewy;">Parents or Guardian Name :</label>
                <input type="text" class="form-control" id="Guardianformcontrol" placeholder="Parent name here" name="Parentname">
                <div class="mb-3 ">
                <label for="Studentformcontrol" class="form-label " style="font-family:Chewy;">Student's Name :</label>
                <input type="text" class="form-control" id="Studentformcontrol" placeholder="Student name here" name="Studentname">
                </div>
                <div class="mb-3 ">
                <label for="Studentageformcontrol" class="form-label " style="font-family:Chewy;">Student's Age :</label>
                <input type="number" class="form-control" id="Studentageformcontrol" placeholder="Student Age here" name="studentage">
                </div>
                <div class="mb-3 ">
                <label for="Addressformcontrol" class="form-label " style="font-family:Chewy;">Address :</label>
                <input type="text" class="form-control" id="Addressformcontrol" placeholder="Address here" name="Address">
            </div>
            <div class="mb-3 ">
                <label for="Contactnumformcontrol" class="form-label " style="font-family:Chewy;">Contact Number :</label>
                <input type="number" class="form-control" id="Contactnumformcontrol" placeholder="Contact Number here" name="contactnum">
            </div>
            <div class="mb-3 ">
                <label for="Emailformcontrol" class="form-label " style="font-family:Chewy;">Email :</label>
                <input type="email" class="form-control" id="Emailformcontrol" placeholder="Email@here" name=Email>
            </div>
            

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
                    <input type="date" class="form-control" id="Dateageformcontrol" name="Date">
                    </div>

                    <div class="mb-3 ">
                <label for="Timeformcontrol" class="form-label" style="font-family:Chewy;">Choose your time :</label>
                <select name="timeform" id="Timeformcontrol">
                  <option value="1">11 am</option>
                  <option value="2">1.30 pm</option>
                  <option value="3">3.30 pm</option>
                </select>
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
                <label for="Assestmentformcontrol" class="form-label" style="font-family:Chewy;">Choose :</label>
                <select name="assestmentform" id="Assestmentformcontrol">
                <option value="1">Assessment Only.</option>
                <option value="2">Assessment with Report.</option>
                </select>
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
                <select name="paymentform" id="Paymentformcontrol">
                  <option value="1">Cash.</option>
                  <option value="2">Online Banking.</option>
                </select>
            </div>

            <div class="mb-3">
            <button type="submit" class="btn btn-outline-primary d-grid gap-2 col-12">Submit</button>
            </div>
          </form>
            </div>
        </div>
      </div>
</body>
</html>