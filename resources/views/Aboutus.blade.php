<!DOCTYPE html>
<head lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!--BOOTSTRAP IMPLEMENTATION-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <!--External CSS Implementation-->
         <!--SWIPER JS IMPLEMENTATION-->
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
        <title>About</title>
    </head>
    <body class="vh-100 overflow hidden">
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

          <div class="container">
           
            <!--TEAM SECTION-->
            <section class="container">
              <h1 class="text-white centered-text learnmore" style="font-family: Chewy;">Swipe to learn more !</h1>
            </section>

            <section>
              <div class="swiper swiper ">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="images/bioteam-Juliana.JPG" alt="">
                    <div class="info">
                      <h3>Dr. Sri Juliana Safri</h3>
                      <h4>Founder &amp; Managing Director</h4>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <img src="images/bioteam3.JPG" alt="">
                    <div class="info">
                      <h3>Ariful Akmal Mohd Kasim</h3>
                      <h4>Co-founder &amp; Director</h4>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <img src="images/bioteam1.jpg" alt="">
                    <div class="info">
                      <h3>Idris</h3>
                      <h4>Chief Information Officer &amp; Manager</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </section>

            <section class="container biography">
              <h2 style="font-family: Lobster;" >Dr Sri Juliana Safri</h2>
              <p style="font-family: Poppins;">PD SpED (France), EMHRM UniRazak, LRN, UK(2023),  AdvDip(ChildPsych,UK), DipSEND(UK), Cert.Sup. CLD(UOL, UCL Institute of Education, UK), Cert.SLT(UK), Cert.TESOL/TEFL (UK), CP.NLP(UK), CP.CBT(UK), Trauma-Sensitive CP (HeartMath, USA), Certified Professional Life Coach (USA).</p>
              <img src="images/bioteam2.JPG" alt="Dr_Juliana_img">
              <p style="font-family: Poppins;">Dr. Sri Juliana Safri is an accomplished educator dedicated to improving lives through learning. With a rich academic journey spanning the UK, USA, and Malaysia, she holds qualifications ranging from a Professional Doctorate in Special Education to various certifications in child psychology, special educational needs, coaching, and more.

                Driven by a passion for positive change, Dr. Safri founded BioDyslexia, an initiative aimed at empowering dyslexic learners. Her commitment to transforming education is evident in the initiative's impactful work. This biography highlights her diverse expertise and global perspective, showcasing a visionary leader in the field of education.
                </p>
            </section>

            <section class="container biography2">
              <h2 style="font-family: Lobster;">Ariful Akmal Mohd Kasim</h2>
              <img src="images/bioteam3.JPG" alt="Ariful_Akmal_img">
              <div class="heartmath">
                <img src="images/Heartmath CP.png" alt="Heartmath">
              </div>
              <p style="font-family: Poppins;">Is an accomplished Independent Business  Owner known for delivering strong revenue and profit gains in highly competitive markets. The Director with company oversight, committed to cost-effective management of resources and quality performance. In Credit and collection business over 12 years, Multi-task oriented, Expert, Highly Motivated with solid experience managing all levels of multiple projects including F&B and Education. </p>
            </section>

            <section class="container biography3">
              <h2 style="font-family: Lobster;">Idris</h2>
              <img src="images/bioteam1.jpg" alt="Idris_img">
              <p style="font-family: Poppins;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima unde corporis, esse iste quidem obcaecati? Accusamus dicta possimus dolore iste in! Veniam velit voluptatum omnis provident laboriosam ipsam a facere.</p>
            </section>

      
            <!--SWIPER JS TEAM IMPLEMENTATION-->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
          const swiper = new Swiper('.swiper', {
            effect: 'cards',
            cardsEffect: {
              grabcursor: true,
              autoplay: true,
              speed: 1000,
              loop: true,
            },
          });
        </script>

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
    </head>
    </html>