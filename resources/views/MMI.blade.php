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
        <title>MMI</title>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="vh-100 overflow-auto antialiased foundationprog">
     <!--NAVBAR IMPLEMENTATION-->
     <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <div class="container">
                <!--NAVBAR LOGO-->
                <div>
                  <a href="/"><img src="{{ URL::asset('/images/biologo.png')}}" alt="mainlogo" style="width:px;height:100px"></a>
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
                      <a class="nav-link text-white" href="/Aboutusselection">About</a>
                    </li> 
                    <li class="nav-item dropdown text-white">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Booking</a>
                        <div class="dropdown-menu">
                            <a href="/Booking"class="dropdown-item">BioDyslexia Educational Assessment</a>
                            <div class="dropdown-divider"></div>
                            <a href="/Othersbook" class="dropdown-item">Student Registration</a>
                        </div>
                    </li>
                      <li class="nav-item dropdown text-white">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Programme</a>
                        <div class="dropdown-menu">
                            <a href="/Introductionletters"class="dropdown-item">Introduction Letter</a>
                            <a href="/Foundationprog" class="dropdown-item">BioDyslexia 4M Foundation Programme<br> (All Ages)</a>
                            <a href="/MMI" class="dropdown-item">BioDyslexia MMI Techniques Programme<br> (For Elementary & Secondary Students)</a>
                            <div class="dropdown-divider"></div>
                            <a href="/Bioiqra1" class="dropdown-item">BioIqra' 1 (Islamic Programme)</a>
                            <a href="/Bioiqra2"class="dropdown-item">BioIqra' 2 (Islamic Programme)</a>
                            <div class="dropdown-divider"></div>
                            <a href="/Programschedule"class="dropdown-item"> Programme Schedule</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown text-white">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">EIU</a>
                        <div class="dropdown-menu">
                            <a href="/Eiu"class="dropdown-item">Courses for Teachers &amp; Parents</a>
                            <div class="dropdown-divider"></div>
                            <a href="/Chat"class="dropdown-item">Personal chat</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown text-white">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Buy a Book</a>
                        <div class="dropdown-menu">
                            <a href="https://www.amazon.com/Comes-BioDyslexia-Commander-Dyslexia-Defenders/dp/9358830433"class="dropdown-item">Amazon</a>
                            <a href="https://www.kobo.com/hk/en/ebook/here-comes-biodyslexia-the-commander-of-the-dyslexia-defenders"class="dropdown-item">Rakuten Kobo</a>
                            <a href="https://www.booktopia.com.au/here-comes-biodyslexia-the-commander-of-the-dyslexia-defenders--sri-juliana-safri/ebook/9789358830422.html"class="dropdown-item">Booktopia</a>
                            <a href="https://www.indigo.ca/en-ca/here-comes-biodyslexia-the-commander-of-the-dyslexia-defenders/9789358830439.html"class="dropdown-item">Indigo</a>
                            <a href="https://www.betterworldbooks.com/product/detail/here-comes-biodyslexia-the-commander-of-the-dyslexia-defenders-9789358830439"class="dropdown-item">BetterWorldBooks</a>
                        </div>
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

              <!--Main Content here-->
              
              <div class="container">
                <section class="w-100 vh-100 d-flex flex-column justify-content-center align-items-center fs-1">
                <h1 class="centered-text fade-in-text" style="font-family: Chewy;">Welcome to MMI Techniques Program </h1>
                <br>
                <a href="/Foundationform"><button class="button d-grid col-5 ml-auto mr-auto ">Register Here</button></a>
                
                </section>
              </div>

              <div class="float-container bg-white" id="Frame">
                <section class="float-child">
                  <img src="/images/Program_media1.JPEG" alt="" class="w-100 Frame">
                </section>
              </div>

              
              

             
              
              
</body>
</html>