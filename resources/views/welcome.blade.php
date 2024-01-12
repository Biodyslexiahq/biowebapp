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
    <body class="vh-100 overflow-auto antialiased">
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
                        <a class="nav-link text-white" href="/Booking">Booking</a>
                      </li>
                      <li class="nav-item dropdown text-white">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Programme</a>
                        <div class="dropdown-menu">
                            <a href="#"class="dropdown-item">Introduction Letter</a>
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

          <!--MAIN BODY IMPLEMENTATION-->
          <div class="container">
            <section class="w-100 vh-100 d-flex flex-column justify-content-center align-items-center fs-1 ">
              <h1 class="centered-text fade-in-text" style="font-family: Chewy;">Welcome to BioDyslexia</h1>
              <h2 class="centered-text fade-in-text gap-50px" style="font-family: Poppins;">We are Dyslexia Friendly Centre, We care about your Children.</h2>
              <br>
              <div class=" container">
              
              <a href="/Booking"><button class="button d-grid col-5 ml-auto mr-auto">Get a quotation ></button></a>
              </div>
            </section>
          </div>
          
          <div class=" float-container bg-white ">
            <section class=" float-child ">
            <h1 class=" fade-in-text" style="font-family: Oswald;">About Us <i class="fa-regular fa-address-card"></i></h1>
            <br>
            <h5 style="font-family: Poppins;">
                For more than a year, it has been our joy to help students<br>
                who struggle with learning disabilities to become confident<br>
                learners who will leave us with the skills to continue to<br>
                succeed in life far beyond our walls.
            </h5>
              <br>
              <h5 style="font-family: Poppins;">
                BioDyslexia is a complete learning program for Dyslexia<br>
                and other learning disabilities. Our research based program<br>
                is a process of identifying and intervention of Dyslexia<br>
                through Biofeedback Protocol and Script. The unique combination<br>
                of Visual, Auditory and Kinesthetic (VAKT) Teaching Method<br>
                and Biofeedback mind-body technique has proven to help students<br>
                <b>learn faster / improve impulse control<br>/
                emotional resilience / academic focus and confidence.</b><br>
              </h5>
              <br>
              <h5 style="font-family: Poppins;" >
                BioDyslexia program is the first in the world and has received<br>
                recognition from institutions of higher education and the HearthMath<br>
                Institute USA. BioDyslexia has won two gold awards at the local and<br>
                international innovation competition thus far.
              </h5>
              <br>
              <h1 class=" fade-in-text" style="font-family: Oswald;">Misson <i class="fa-solid fa-check"></i></h1>
              <br>
              <h5 style="font-family: Poppins;">
              BioDyslexia ignites the academic and creative potential of students with dyslexia and other language-based learning differences. 
              </h5>
              <br>
              <h1 class=" fade-in-text" style="font-family: Oswald;">Vision <i class="fa-solid fa-check"></i></h1>
              <br>
              <h5 style="font-family: Poppins;">
              The world class educational program at BioDyslexia is a catalyst for students to discover the joy of learning within a rich, comprehensive school experience.
              </h5>
              <br>
              <h1 class=" fade-in-text" style="font-family: Oswald;">Core Values <i class="fa-solid fa-check"></i></h1>
              <br>
              <h5 style="font-family: Poppins;">
              Respect | Responsibility | Purpose | Perseverance
              </h5>
              <br>
             </section>

             <section class="float-child">
              <img src="/images/aboutusimg4.jpg" alt="">
             </section>
          </div>
            <br><br>

            <!--Dyslexia faq-->
            <div class="container">
           <section>
           <h1 class="centered-text fade-in-text" style="font-family: Chewy;">Dyslexia FAQ</h1>
           </section>
           <br><br>
           <section class="centered-text">
            <a style="font-family: Poppins; "  href="/Dyslexiainfo">What is Dyslexia?</a>
           </section>
           <section class="centered-text">
            <a style="font-family: Poppins;"  href="/ProbleminDyslexia">Problems in Dyslexia?</a>
           </section>
           <section class="centered-text">
            <a style="font-family: Poppins;"  href="/Childevaluation">When should a child be evaluated?</a>
           </section>
           <section class="centered-text">
            <a style="font-family: Poppins;"  href="/Commonques">Other common Questions?</a>
           </section>
            </div>

            <br><br>
            <div class="container">
            <section>
           <h1 class="centered-text fade-in-text" style="font-family: Chewy;">BioDyslexia FAQ</h1>
           </section>
           <br><br>
           <section class="centered-text">
            <a style="font-family: Poppins;"  href="/Collab"> What is the Objective of the Collaboration?</a>
           </section>
           <section class="centered-text">
            <a style="font-family: Poppins;"  href="/Biofeedback">Why do we use Biofeedback?</a>
           </section>
           <section class="centered-text">
            <a style="font-family: Poppins;"  href="/Vakt">What is Dyslexia and the VAKT Teaching Method?</a>
           </section>
           <section class="centered-text">
            <a style="font-family: Poppins;"  href="/Multisensory">Why do we use the Multisensory Teaching/Learning Method?</a>
           </section>
           <section class="centered-text">
            <a style="font-family: Poppins;"  href="/Multisensory2">Advantages of Multisensory Learning?</a>
           </section>
           <section class="centered-text">
            <a style="font-family: Poppins;"  href="">The process of BioDyslexia Protocol &amp; Script and Interventions?</a>
           </section>
           <section class="centered-text">
            <a style="font-family: Poppins;"  href="/Chooseus">Why Choose Us?</a>
           </section>
            </div>
            <br><br>

            <div class="float-container bg-white">
              <section class="float-child">
              <h1 class="centered-text2 fade-in-text" style="font-family: Oswald;">Our "Train The Trainers" HRDF Claimable Training</h1>
              <img class="hrdcorp"src="/images/hrdcorp.png" alt="hrdcorp image 1">
              <img class="hrdcorp"src="/images/hrdcorp2.png" alt="hrdcorp image 2">
              <br>
              <h5>
              Join our Teacher Training Program for Teachers, Educators and Parents in Supporting Learners with Dyslexia & Other Learning Disabilities. <br><br>𝐁𝐢𝐨𝐃𝐲𝐬𝐥𝐞𝐱𝐢𝐚© '𝐓𝐫𝐚𝐢𝐧 𝐓𝐡𝐞 𝐓𝐫𝐚𝐢𝐧𝐞𝐫𝐬' 𝐏𝐫𝐨𝐠𝐫𝐚𝐦 𝐢𝐬 𝐧𝐨𝐰 𝐨𝐟𝐟𝐢𝐜𝐢𝐚𝐥𝐥𝐲 𝐇𝐑𝐃𝐅 𝐓𝐫𝐚𝐢𝐧𝐢𝐧𝐠 𝐏𝐫𝐨𝐯𝐢𝐝𝐞𝐫. 𝐁𝐢𝐨𝐃𝐲𝐬𝐥𝐞𝐱𝐢𝐚© '𝐓𝐫𝐚𝐢𝐧 𝐓𝐡𝐞 𝐓𝐫𝐚𝐢𝐧𝐞𝐫𝐬' is a 𝐇𝐑𝐃𝐅 Claimable Training Provider (TP) registered with PSMB. This accreditation empowers all training by City Technologies to provide highest level of training. Our goal is to raise the standards and quality of professional learning and human development in the educational and social care sectors.
              </h5>
              </section>
              <section class="float-child ">
              <img class="bioworkshop" src="/images/Bioworkshop.jpg" alt="">
              <br>
              <div>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfhJUyiqftB8O-8_onLkBI-pUFtyoZ2em69qJf20v5LKJp1Ew/viewform"><button type="submit" class="btn btn-outline-primary d-grid gap-2 col-6 ml-auto mr-auto">Register Now!</button></a>
              </div>
              </section>
            </div>

            <div class="container-full ">
              <section class=" d-flex flex-column justify-content-center allign-items-center fs-1">
                <br>
              <h1 class="centered-text fade-in-text" style="font-family: Chewy;">Our Branches</h1>
              <br>
              <div class="tabs ml-auto mr-auto">
              <input class="input" name="tabs" type="radio" id="tab-1" checked="checked"/>
              <label class="label"  style="font-family: Oswald;" for="tab-1">Selangor</label>
              <div class="panel">
                <h1 style="font-family: Poppins;">SELANGOR</h1>
                <p>No. 30-1, Jalan Simfoni 1, Balakong, Seri Kembangan, Selangor</p>
                <br>
                <p>60-2 Jalan Nautika B U20/B, Pusat Komersial TSB, 40160 Shah Alam</p>
                
              </div>
              <input class="input" name="tabs" type="radio" id="tab-2"/>
              <label class="label" style="font-family: Oswald;" for="tab-2">Negeri Sembilan</label>
              <div class="panel">
                <h1 style="font-family: Poppins;">NEGERI SEMBILAN</h1>
                <p>No. 42, Jalan S2 Garden Avenue, 70300 Seremban</p>
                
              </div>
              <input class="input" name="tabs" type="radio" id="tab-3"/>
              <label class="label" style="font-family: Oswald;" for="tab-3">More Info</label>
              <div class="panel">
                <h1 style="font-family: Poppins;">Email us:</h1>
                <p>citytechnologiesbiodyslexia@gmail.com</p>
                <br>
                <h1 style="font-family: Poppins;">Call us:</h1>
                <p>Headquarters: 03-8961 1922</p>
                <p>Mobile: 019320 0181 / 016 974 2101</p>
              </div>
            </div>
            </section>
             </div>
              <br><br>
             <div class="w-100 vh-100 d-flex flex-column justify-content-center allign-items-center fs-1 bg-white ">
              <section class="container-full ">
              <h1 class="centered-text2 fade-in-text" style="font-family: Oswald;">Our Official Collaborator</h1>
              <br>
              <div class="d-flex  justify-content-center align-items-center">
              <img src="/images/heartmath2.png" alt="heartmath logo" style="float:left; margin-right:10px;">
              <img src="/images/UMP.png" alt="Ump Logo" style="float:left; margin-right:10px;" class="ump">
              <img src="/images/eiu.png" alt="Ump Logo" style="float:left;" class="ump">
              </div>
              
              </section>
             </div>
                      

          

    <!--Swiper JS Script-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
  
 
  </body>
</html>