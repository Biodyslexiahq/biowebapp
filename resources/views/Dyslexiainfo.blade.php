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
        <title>What is Dyslexia</title>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="vh-100 overflow-auto antialiased">
     <!--NAVBAR IMPLEMENTATION-->
     <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <div class="container">
                <!--NAVBAR LOGO-->
                <div>
                  <a href="/"><img src="{{ URL::asset('/images/mainlogo.jpg')}}" alt="mainlogo" style="width:290px;height:80px"></a>
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
                    <li class="nav-item dropdown text-white">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Booking</a>
                        <div class="dropdown-menu">
                            <a href="/Booking"class="dropdown-item">BioDyslexia Educational Assessment</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Other Bookings.</a>
                        </div>
                    </li>
                      <li class="nav-item dropdown text-white">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Programme</a>
                        <div class="dropdown-menu">
                            <a href="/Introductionletters"class="dropdown-item">Introduction Letter</a>
                            <a href="#" class="dropdown-item">BioDyslexia 4M Foundation Programme<br> (All Ages)</a>
                            <a href="#" class="dropdown-item">BioDyslexia MMI Techniques Programme<br> (For Elementary & Secondary Students)</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">BioIqra' 1 (Islamic Programme)</a>
                            <a href="#"class="dropdown-item">BioIqra' 2 (Islamic Programme)</a>
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


        <!--Dyslexia Info-->

        <div class="container">
            <section class="w-100 vh-100 d-flex flex-column justify-content-center allign-items-center fs-1 ">
            <h1 class="centered-text fade-in-text" style="font-family: Chewy;">What is Dyslexia?</h1>
            </section>
        </div>
        <div class="container">
            <section class="w-100 vh-100 d-flex flex-column justify-content-center allign-items-center fs-1">
            <small class="centered-text">
            The word dyslexia comes from Greek and means ‘difficulty with words’. Around 10% of the population have some form of dyslexia related issues. Dyslexia could be thought of as a different learning ability rather than a disability. Dyslexic people, of all ages, can learn efficiently and effectively, but often need a different approach. Generally, dyslexia is known as a learning disability of a neurobiological cause. It is generally explained as a struggle of word recognition, spelling and decoding abilities. These difficulties are a result of a deficit in the phonological component of language typically result from a deficit in the phonological component of language. Other difficulties include comprehension and struggle of reading compared to people of their age group (International Dyslexia Association, 2002)
            </small>
            <br>
            <small class="centered-text">
                
Symptoms of dyslexia arise in childhood when a child faces slow development in the aspects of reading, speech development, coordination and spelling to name a few.(Brazier, 2017). Dyslexia is independent of intelligence. The severity of dyslexia varies from one individual to another.According to the Malaysian statistics estimated by the Ministry of Health Malaysia (2017), around 4 to 8 percent of school going kids are dyslexic . The question here is, what about the children who are not enrolled in government schools? Dyslexia was present in the Diagnostic and Statistical Manual of Mental Disorders 4th Edition under the Learning Disorder category (American Psychological Association, 2019). Revisions in the manual resulted in the change from Learning Disorder to Specific Learning Disorder.
            </small>
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