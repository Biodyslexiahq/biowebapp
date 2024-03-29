<!DOCTYPE html>
<html lang="en">
<head>
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
        <title>Bioiqra information</title>
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

            <div class="container w-100 vh-100 d-flex flex-column justify-content-center allign-items-center fs-1">
            <h1 class="centered-text fade-in-text" style="font-family: Chewy;">Bioiqra Info</h1>
            </div>

            <div class="float-container bg-white overflow-auto ">
        <section class="float-child">
        <h1 class="centered-text2 fade-in-text" style="font-family: Oswald;">What is Bioiqra?</h1>
        <br>
        <p>It gives us immense pleasure to introduce our new program BioIqra'. Our special program was designed to nurture and empower students to become responsible Muslim citizens who contribute not only to their own development, but also to the well-being of their family, friends, neighbors and the community they live in. It is our aim to provide an Islamic, safe and structured learning environment for children.   We want to create an environment where learning is fun and effective. Our program is well structured and innovative makes us unique and different from all the programs offered out there! </p>
        <br><br>
        <p>
        To pursue excellence in providing Islamic and school education to the next generation. We have put together a Islamic Module  that is broad and balanced, covering:
        <br>
        <ul>
            <li>- Quranic Studies</li>
            <li>- Islamic History</li>
            <li>- Sirah & Hadith</li>
            <li>- Aqidah, Fiqh & Akhlaq</li>
        </ul>
        <br>
        We have teachers who can relate to, listen to and motivate children to excel. We use learning methods and materials to make learning enjoyable. We involve the parents in the education of their children by giving progress updates and arranging parents meetings. 
        </p>
        <br><br>
        <h1 class="centered-text2 fade-in-text" style="font-family: Oswald;">Class Schedule?</h1>
        <br>
        <p>
          <ul>
            <li><b>- Class Duration :</b> 4 Hours covering all 4 Modules</li>
            <li><b>- Daily Class :</b> Monday until Friday (You can choose the Morning or Afternoon Session)</li><br>
            <li><b>- Morning Session:</b> 8AM until 12PM</li>
            <li><b>- Afternoon Session:</b> 1PM until 5PM</li>
            <li><b>- Weekend Saturday Class:</b> 9AM until 1PM</li>
          </ul>
        </p>
        </section>
        <section class="float-child">
        <h1 class="centered-text2 fade-in-text" style="font-family: Oswald;">Ready to register ?</h1>
        <br>
        <a href="/Bioiqra1"><button class="button d-grid col-5 ml-auto mr-auto ">Bioiqra 1</button></a>
        <br>
        <a href="/Bioiqra2"><button class="button d-grid col-5 ml-auto mr-auto ">Bioiqra 2</button></a>
        </section>

        </div>

        <!--FAB IMPLEMENTATION-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
              <div class="floating-container">
                <div class="floating-button">+</div>
                <div class="element-container">

                  <a href="https://api.whatsapp.com/send?phone=60193769940&text=Hey%2C%20I%20would%20like%20to%20check%20for%20time%20availability%20please." span class="float-element tooltip-left">
                    <i class="material-icons">phone</i></a>
                  <a href="/Contactus" span class="float-element">
                    <i class="material-icons">email</i></a>
        
                    <span class="float-element">
                    <i class="material-icons">chat</i>
                  </span>
                </div>
              </div> 
        
</body>
</html>