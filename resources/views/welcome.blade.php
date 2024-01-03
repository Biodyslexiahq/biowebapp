<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
    <body class="vh-100 overflow-auto antialiased ">
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

          <!--MAIN BODY IMPLEMENTATION-->
          <div class="container">
            <section class="w-100 vh-100 d-flex flex-column justify-content-center allign-items-center fs-1 ">
              <h1 class="centered-text fade-in-text" style="font-family: Chewy;">Welcome to Biodyslexia</h1>
              <h2 class="centered-text fade-in-text gap-50px" style="font-family: Poppins;">Discover a limitless world of learning.</h2>
            </section>
             <section class="left">
              <div id="cloud"></div>
            </section>
            <section class="right">
              <div id="cloud2"></div>
          </div>
          
          <div class="container">
            <section class="w-100 vh-100 d-flex flex-column justify-content-center allign-items-center fs-1 ">
              <h1 class="centered-text fade-in-text" style="font-family: Chewy;">Programs For All Ages</h1>
              <h5 class="centered-text fade-in-text" style="font-family: Poppins;">Welcome to our school, where we offer the greatest special education to students with learning disabilities.</h3>
              </section>
              <section class="left1">
                <div id="cloud3"></div>
              </section>
            </section>
          </div>

          <div class="containerimage">
              <h1 class="centered-text fade-in-text sign" style="font-family: Chewy;">Awards &amp; Certificates</h1>
            </section>
            
            <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" centered-slides="true" grab-cursor="true">
              <swiper-slide>
                <img id="slide-1" src="images/cert1.jpeg" alt="certificate 1"/>
              </swiper-slide>
              <swiper-slide>
                <img id="slide-2" src="images/cert2.jpeg" alt="certificate 2"/>
              </swiper-slide>
              <swiper-slide>
                <img id="slide-3" src="images/cert3.jpeg" alt="certificate 3" />
              </swiper-slide>
              <swiper-slide>
                <img id="slide-4" src="images/cert4.jpg" alt="certificate 4" />
              </swiper-slide>
              <swiper-slide>
                <img id="slide-5" src="images/cert5.jpg" alt="certificate 5" /></swiper-slide>
              <swiper-slide>
                <img id="slide-6" src="images/cert6.jpg" alt="certificate 6" /></swiper-slide>
              <swiper-slide>
                <img id="slide-7" src="images/cert7.jpg" alt="certificate 7" />
              </swiper-slide>
            </swiper-container>
          </div>

          <div class="container">
            <section>
              <h1 class="centered-text feedback" style="font-family: Chewy;">Client Testimonials &amp; Feedback</h1>
            </section>
            
            <swiper-container class="clientswiper" pagination="true" pagination-clickable="true" centered-slides="true" grab-cursor="true">
              <swiper-slide>
                <h1 style="font-family: Lobster;">En. Khairul Azman Bin Jamaludin</h1>
                <div class="clientinfo">
                  " Program ini mempunyai kaedah yang tersendiri dan guru-guru yang mahir dalam pengajaran dan sokongan kepada murid "
                </div>
              </swiper-slide>
              <swiper-slide>
                <h1 style="font-family: Lobster;">Puan Nordziah Binti Bakri</h1>
                <div class="clientinfo">
                  " Ujian diagnostik hasil kerjasama bersama UMP adalah salah satu inisiatif baik dalam mengenalpasti kecenderungan cara pengajaran yang membolehkan anak-anak dicenter ini belajar dengan lebih efektif "
                </div>
              </swiper-slide>
              <swiper-slide>
                <h1 style="font-family: Lobster;">Encik Mohammad Feroz Bin Mehat</h1>
                <div class="clientinfo">
                  " Nampak peningkatan dalam diri Aqif dari segi pelajaran dan pergaulan. Dia mula seronok ke sekolah dan belajar. Pembelajaran yang sesuai untuk anak2 dyslexia "
                </div>
              </swiper-slide>
              <swiper-slide>
                <h1 style="font-family: Lobster;">Puan Norhayati Yusof</h1>
                <div class="clientinfo">
                  " Ilmu yang sangat berguna, saya sarankan ibuayah yang mempunyai anak2 yang mempunyai kesukaran dan anak2 istimewa disleksia untuk datang ke sini...Terbaik! Terima Kasih Tuan Arif dan Puan Julie. Terima Kasih layanan terbaik "
                </div>
              </swiper-slide>
            
            </swiper-container>
            
           
          

          

    <!--Swiper JS Script-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    
 
  </body>
</html>