<!DOCTYPE html>
<html lang="en">
<head>
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
        <title>Common Questions</title>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="vh-100 overflow-auto antialiased commonques">
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

            <div class="container w-100 vh-100 d-flex flex-column justify-content-center allign-items-center fs-1">
            <h1 class="centered-text fade-in-text" style="font-family: Chewy;">Discover Other Dyslexia Common Questions?</h1>
            </div>

            <div class="float-container bg-white overflow-auto ">
        <section class="float-child">
        <h1 class="centered-text2 fade-in-text" style="font-family: Oswald;">How common is Dyslexia?</h1>
        <br>
        <p>Dyslexia affects 20 percent of the population and represents 80–90 percent of all those with learning disabilities. It is the most common of all neuro-cognitive disorders.</p>
        <br><br>
        <h1 class="centered-text2 fade-in-text" style="font-family: Oswald;">Can smart people be Dyslexic?</h1>
        <br>
        <p>Some of the brightest children struggle to read. Dyslexia occurs at all levels of intelligence—average, above average and highly gifted. Many gifted people at the top of their fields are dyslexic. While people with dyslexia are slow readers, they often are very fast and creative thinkers.</p>
        </section>

        <section class="float-child">
        <h1 class="centered-text2 fade-in-text" style="font-family: Oswald;">Can Dyselxia be cured?</h1>
        <br>
        <p>Dyslexia can’t be “cured”—it is lifelong. But with early screening, early diagnosis, early evidence-based reading intervention and appropriate accommodations, dyslexic individuals can become highly successful students and adults.</p>
        <br><br>
        <h1 class="centered-text2 fade-in-text" style="font-family: Oswald;">Can wearing glasses help with Dyslexia?</h1>
        <br>
        <p>At its core, dyslexia is a problem accessing the sound of spoken language. It is not a visual disorder. Early screening, early diagnosis, early evidence-based reading intervention and appropriate accommodations are what is needed to help dyslexic individuals.</p>
        </section>

        <section class=" w-100 vh-50 container-full bg-white">
        <h1 class="centered-text2 fade-in-text" style="font-family: Oswald;">Can students with Dyslexia perform well in school?</h1>
        <br>
        <p>Many dyslexic students perform very well in school. These students are usually highly motivated and work extremely hard. In many cases they have been identified early and have received evidence-based interventions and accommodations, such as extra time on tests, which allows them to demonstrate their knowledge. Dyslexic students have completed rigorous programs at highly selective colleges, graduate and professional schools.</p>
        <br><br>
        </section>
        </div>

        
        




</body>
</html>