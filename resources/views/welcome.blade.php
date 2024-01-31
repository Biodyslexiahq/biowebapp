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
             
             </section>

             <section class="float-child">
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
            <a style="font-family: Poppins;"  href="/Childrensuccess"> Can BioDyslexia guarantee children success?</a>
           </section>
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
             
             <!--USER TESTIMONIALS STARTS HERE BM-->
            <div class="container-full bg-white">
            <div class="testimonials text-center">

            <div class="container">
            <h1 class="centered-text2 fade-in-text" style="font-family: Oswald;">What Our Client Says</h1>
            <h1 class="centered-text2 fade-in-text" style="font-family: Oswald;">BM</h1>
              <div class="row">
                <div class="col-md-6 col-lg-4">
                  <div class="card border-light bg-light text-center">
                    <i class="fa fa-quote-left fa-3x card-img-top rounded-circle" aria-hidden="true"></i>
                    <div class="card-body blockquote">
                      <p class="card-text">Program ini mempunyai kaedah yang tersendiri dan guru-guru yang mahir dalam pengajaran dan sokongan kepada murid</p>
                      <br>
                      <footer class="blockquote-footer"><cite title="Source Title">En.Khairul Azman Bin Jamaludin</cite></footer>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card border-light bg-light text-center">
                    <i class="fa fa-quote-left fa-3x card-img-top rounded-circle" aria-hidden="true"></i>
                    <div class="card-body blockquote">
                      <p class="card-text">Ujian diagnostik hasil kerjasama bersama UMP adalah salah satu inisiatif baik dalam mengenalpasti kecenderungan cara pengajaran yang membolehkan anak-anak dicenter ini belajar dengan lebih efektif</p>
                      <br>
                      <footer class="blockquote-footer"><cite title="Source Title">Puan Nordziah Binti Bakri</cite></footer>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card border-light bg-light text-center">
                    <i class="fa fa-quote-left fa-3x card-img-top rounded-circle" aria-hidden="true"></i>
                    <div class="card-body blockquote">
                      <p class="card-text">Nampak peningkatan dalam diri Aqif dari segi pelajaran dan pergaulan. Dia mula seronok ke sekolah dan belajar. Pembelajaran yang sesuai untuk anak2 dyslexia</p>
                      <br>
                      <footer class="blockquote-footer"><cite title="Source Title">En. Mohd Feroz Bin Mehat</cite></footer>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card border-light bg-light text-center">
                    <i class="fa fa-quote-left fa-3x card-img-top rounded-circle" aria-hidden="true"></i>
                    <div class="card-body blockquote">
                      <p class="card-text">Ilmu yang sangat berguna, saya sarankan ibuayah yang mempunyai anak2 yang mempunyai kesukaran dan anak2 istimewa disleksia untuk datang ke sini...Terbaik! Terima Kasih Tuan Arif dan Puan Julie. Terima Kasih layanan terbaik</p>
                      <br>
                      <footer class="blockquote-footer"><cite title="Source Title">Pn. Norhayati Yusof</cite></footer>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card border-light bg-light text-center">
                    <i class="fa fa-quote-left fa-3x card-img-top rounded-circle" aria-hidden="true"></i>
                    <div class="card-body blockquote">
                      <p class="card-text">Alhamdulillah..

            Anakanda bonda di sini..dari zero dah jadi hero..

            Tqsm tenaga pengajar d sini..banyak membantu..

            Sebelum auliya di sini, dia sentiasa jd rendah diri sbb dia xboleh membaca..tp hari ini..dia bangga dgn dirinya..sering bagitahu pd bonda, abah, che su, tok ma dan mak tok.. "Auliya dah boleh baca"..

            Bonda proud of you auliya..</p>
                      <br>
                      <footer class="blockquote-footer"><cite title="Source Title">Pn. Nik Nurul Hamizah Nik Mohd Hussain</cite></footer>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            </div>
            <br>
            <!--USER TESTIMONIALS ENDS HERE BM-->
            <!--USER TESTIMONIALS STARTS HERE BI-->
            <br><br>
            
            <div class="container-full bg-white"></div>
            <div class="testimonials text-center">
            <div class="container">
            <h1 class="centered-text2 fade-in-text" style="font-family: Oswald;">What Our Client Says</h1>
            <h1 class="centered-text2 fade-in-text" style="font-family: Oswald;">ENG</h1>
              <div class="row">
                <div class="col-md-6 col-lg-4">
                  <div class="card border-light bg-light text-center">
                    <i class="fa fa-quote-left fa-3x card-img-top rounded-circle" aria-hidden="true"></i>
                    <div class="card-body blockquote">
                      <p class="card-text">“This program has its own method and teachers who are skilled in teaching and supporting students”</p>
                      <br>
                      <footer class="blockquote-footer"><cite title="Source Title">En.Khairul Azman Bin Jamaludin</cite></footer>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card border-light bg-light text-center">
                    <i class="fa fa-quote-left fa-3x card-img-top rounded-circle" aria-hidden="true"></i>
                    <div class="card-body blockquote">
                      <p class="card-text">“The collaborative effort with UMP has led to the development of a diagnostic test, which stands out as a positive initiative. This test helps identify effective teaching methods for the children at this center, allowing them to learn more efficiently.” </p>
                      <br>
                      <footer class="blockquote-footer"><cite title="Source Title">Madam Nordziah Bt. Bakri</cite></footer>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card border-light bg-light text-center">
                    <i class="fa fa-quote-left fa-3x card-img-top rounded-circle" aria-hidden="true"></i>
                    <div class="card-body blockquote">
                      <p class="card-text">“It appears that Aqif's progress is notable both academically and socially. He now takes pleasure in attending school and engaging in learning activities. This tailored approach to education is especially beneficial for dyslexic children like him..”</p>
                      <br>
                      <footer class="blockquote-footer"><cite title="Source Title">En. Mohd Feroz Bin Mehat</cite></footer>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card border-light bg-light text-center">
                    <i class="fa fa-quote-left fa-3x card-img-top rounded-circle" aria-hidden="true"></i>
                    <div class="card-body blockquote">
                      <p class="card-text">“Incredibly valuable information – I'd definitely suggest parents of kids facing challenges and those with dyslexia to check this place out. Absolutely top-notch! A big thanks to Mr. Arif and Mrs. Julie for the exceptional service and support.”</p>
                      <br>
                      <footer class="blockquote-footer"><cite title="Source Title">Pn. Norhayati Yusof</cite></footer>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card border-light bg-light text-center">
                    <i class="fa fa-quote-left fa-3x card-img-top rounded-circle" aria-hidden="true"></i>
                    <div class="card-body blockquote">
                      <p class="card-text">“Praise be to Allah, my daughter Auliyawas here – she's gone from zero to hero. A heartfelt thank you to the teaching team; your assistance has been immense. Before Auliya came here, she struggled with reading, but today, she's full of 
pride, often telling us, "Auliya can read," and as her bonda, I couldn't be prouder..”</p>
                      <br>
                      <footer class="blockquote-footer"><cite title="Source Title">Pn. Nik Nurul Hamizah Nik Mohd Hussain</cite></footer>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card border-light bg-light text-center">
                    <i class="fa fa-quote-left fa-3x card-img-top rounded-circle" aria-hidden="true"></i>
                    <div class="card-body blockquote">
                      <p class="card-text">“I'd like to express my gratitude to the dedicated and patient teachers at BioDyslexia, particularly Teacher Nuh, Teacher Thiviya, and Mrs. Julie, for their outstanding efforts in teaching Amir. Their diligence has paid off brilliantly. Amir's journey from struggling to succeeding is a testament to the effectiveness of their hard work and support. He's transformed from zero to 
                                            hero, all thanks to the incredible 
                                            guidance provided by these teachers..” </p>
                      <br>
                      <footer class="blockquote-footer"><cite title="Source Title">Madam Nurul Farhana Mohd Ishak</cite></footer>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card border-light bg-light text-center">
                    <i class="fa fa-quote-left fa-3x card-img-top rounded-circle" aria-hidden="true"></i>
                    <div class="card-body blockquote">
                      <p class="card-text">“Yesterday, a new chapter unfolded; last 
                                            week marked Along's final tuition 
                                            session, and just last night, I had the 
                                            pleasure of meeting his beloved Teacher 
                                            Julie Safri. Over the past year at this 
                                            tuition center, he gained a wealth of 
                                            knowledge that's truly unique. Grateful 
                                            acknowledgments extend to all the 
                                            teachers, who've relentlessly and 
                                            patiently guided Mubin's learning 
                                            journey </p>
                      <br>
                      <footer class="blockquote-footer"><cite title="Source Title">Madam Sue Samsudi</cite></footer>
                    </div>
                  </div>
                </div>

                

                <div class="col-md-6 col-lg-4">
                  <div class="card border-light bg-light text-center">
                    <i class="fa fa-quote-left fa-3x card-img-top rounded-circle" aria-hidden="true"></i>
                    <div class="card-body blockquote">
                      <p class="card-text">“Huge thanks to Teacher Julie for 
                                            providing an opportunity for our dyslexic 
                                            teen, Alyaa. It's been quite a journey as 
                                            our eldest, Alyaa, got to join the dyslexia 
                                            class alongside her younger sister 
                                            Arianna. Since 2008, we've been 
                                            searching for a suitable center near our 
                                            home, and we're grateful we found this 
                                            one. A heartfelt thank you to Teacher 
                                            Thiviya and Teacher Din for their 
                                            unwavering support during the online 
                                            classes even during the PKP 3.0 period. 
                                            Their dedication has resulted in a 
                                            remarkable boost in confidence, evident 
                                            in both girls' performance during the 
                                            mid-year exams. Ariana, who used to 
                                            struggle with 4 subjects (BM, Arabic, 
                                            Jawi, Math) and had difficulty 
                                            comprehending at school, managed to 
                                            pass all for the first time. Alyaa, despite 
                                            frequently being absent due to 
                                            centralized training for MSSS and MSSSM 
                                            PPKI, excelled in all subjects. Your 
                                            dedication is truly appreciated...” </p>
                      <br>
                      <footer class="blockquote-footer"><cite title="Source Title">Madam Feeda Fzl</cite></footer>
                    </div>
                  </div>
                </div>

                

              </div>
            </div>
            </div>
            <br><br>
              <!--FOOTER STARTS HERE-->
            <footer class="footer">
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="https://www.facebook.com/p/BioDyslexia-Educational-Intervention-Therapy-Center-100077100994731/">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="https://x.com/BioDyslexia?s=20">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="https://www.linkedin.com/company/city-technologies/">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="https://www.instagram.com/biodyslexiatuitioncenter/?hl=en">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>
    <ul class="menu">
      <li class="menu__item"><a class="menu__link" href="/">Home</a></li>
      <li class="menu__item"><a class="menu__link" href="/Aboutusselection">About</a></li>
      <li class="menu__item"><a class="menu__link" href="/Contactus">Contact</a></li>

    </ul>
    <p>&copy;2024 BioDyslexia.com | All Rights Reserved</p>
  </footer>
</div>
      <!--FOOTER ENDS HERE-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
                        </div>
            <!--USER TESTIMONIALS ENDS HERE-->
              
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
              
              <!--POP UP WINDOW-->
              <div class='popup-onload'>
              <div class='cnt223'>

              <div class="popup-content">
                    <h1>This is a pop-up</h1>
              <br/>
              <br/>
              <a href='' class='close'>Close</a>
              </div>
              </div>
              </div>

              

    <!--Swiper JS Script
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src='https://code.jquery.com/jquery-1.8.2.js'></script>

    <script>
      $(function(){
      var overlay = $('<div id="overlay"></div>');
      overlay.show();
      overlay.appendTo(document.body);
      $('.popup-onload').show();
      $('.close').click(function(){
      $('.popup-onload').hide();
      overlay.appendTo(document.body).remove();
      return false;
      });

      $('.x').click(function(){
      $('.popup').hide();
      overlay.appendTo(document.body).remove();
      return false;
      });
      });
    </script>-->

    
  
 
  </body>
</html>