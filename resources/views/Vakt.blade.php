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
        <title>What is BioDyslexia &amp; VAKT</title>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="vh-100 overflow-auto antialiased vakt">
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

        <br><br>
        <!--Dyslexia Info-->

        <div class="container w-100 vh-100 d-flex flex-column justify-content-center allign-items-center fs-1">
        </div>
        

        <div class="float-container bg-white  ">
        <section class="float-child">
        <h1 class="centered-text2 fade-in-text" style="font-family: Oswald;">What is BioDyslexia?</h1>
        <br>
        <p>BioDyslexia© is a complete process of identification and intervention for children who have a persistent difficulty in learning to read as dyslexia. What separates BioDyslexia© with other dyslexia programs and dyslexia assessments testing's in the market today, is the unique combination of Visual, Auditory and Kinesthetic-Tactile (VAKT) Teaching Method and the Biofeedback Protocol & Script. </p>
        <br>
        <h1 class="centered-text2 fade-in-text" style="font-family: Oswald;">How VAKT were used?</h1>
        <br>
        <p>BioDyslexia© VAKT Teaching Method is an instructional approach intended primarily for use with persons who have difficulty with reading, spelling, and writing of the sort associated with dyslexia through Biofeedback Protocol & Script. The approach would incorporate the VAKT Multisensory Teaching Method and to identify the most coherent or dominant sensory in a particular student. This will then turn to become an intervention when teaching and learning materials revolve around the most coherent sensory method. Coherence plays a major role in this approach as learning in a state of coherence the student could practice and overcome struggles in learning easily. Students can also benefit from knowing which multisensory method is the most suitable for them by looking at levels of coherence. This could be put in use until even when they are adults one day.</p>
        </section>

        <section class="float-child">
        <h1 class="centered-text2 fade-in-text" style="font-family: Oswald;">Ready to evaluate ?</h1>
        <br>
        <a href="/Booking"><button class="button">Click Me</button></a>
        </section>
        
        </div>
</html>