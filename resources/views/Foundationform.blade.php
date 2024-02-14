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
        <title>4M Foundation Form</title>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="foundationprog">
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
          <!--Main Part Here-->

          <div class="container display-flex justify-content-center align-items-center">
            <div class="row border rounded-5 p-3 bg-white shadow box-area ml-auto mr-auto">
                <h1 class="centered-text2" style="font-family: Poppins;">Program Registration For BioDyslexia</h1>
                <br><br>
                <div>
                    <h4 class="centered-text3" style="font-family: Poppins;">4M Daily Class</h4>
                </div>
                <br>
                <div>
                    <h1><b>Physical Class :</b> RM 600 (T-Shirt Excluded)</h1><br>
                    <h1><b>(One Time Payment and non-refundable)</b></h1>
                    <h1>Monthly Fee : RM 550 // Total : RM 1150</h1><br><br>
                    <h1><b>Online Class :</b> RM 600 (Per Class per subject 1 Hour)</h1><br>
                    <h1><b>(One Time Payment and non-refundable)</b></h1>
                    <h1>Monthly Fee : RM 550 // Total : RM 1150</h1><br><br>
                    <h1><b>For BioDyslexia Educational Diagnostic Assessment Appointment please contact us via Whatsapp.</b></h1>
                </div>
                <div>
                    <form action="{{url ('addfourmdailydata')}}" method="POST">
                    @csrf
                    <div>
                    <h4 class="centered-text3 mt-5" style="font-family: Poppins;">Preferer Programme</h4>
                    </div>
                    <div class="mb-3">
                        <label for="programme" class="form-label" style="font-family:Poppins;" >Choose your Programme :</label>
                        <select name="programmeselect1" id="programmeselect1">
                        <option disabled selected value> -- select an option -- </option>
                            <option value="4M Daily Class (Physical)">4M Daily Class (Physical Class) (5 Days) RM 1150</option>
                            <option value="4M Daily Class (Online)">4M Daily Class (Online Class) (5 Days) RM 1150</option>
                            <option value="BioDyslexia Educational Diagnostic">BioDyslexia Educational Diagnostic Assessment Appointment (RM200 + RM50 Report (optional)</option>
                            <option value="BioDyslexia Educational Assessment">Online BioDyslexia Educational Assessment (RM50)</option>
                        </select>
                        </div>
                        <div>
                        <h4 class="centered-text3 mt-5" style="font-family: Poppins;">Session Physical Class</h4>
                        <h3 class="centered-text3 mb-5">For online class please mention the days and time prefer in the other section.</h3>
                        </div>
                        <div class="mb-3">
                        <label for="time" class="form-label" style="font-family:Poppins;" >Choose your time :</label>
                        <select name="Sessionphysical" id="sessionphysical">
                        <option disabled selected value> -- select an option -- </option>
                            <option value="Morning (8:30am - 11:30am)">Morning (8:30am - 11:30am)</option>
                            <option value="Morning (9:30am - 12:30pm)">Morning (9:30am - 12:30pm)</option>
                            <option value="Evening (2:00pm - 5:00pm)">Evening (2:00pm - 5:00pm)</option>
                        </select>
                        <input type="text" class="form-label" name="onlineclass" placeholder="Online class here..">
                        <p><b>* Please enter "None" in online class field before proceeding.</b></p>
                        </div>
                        <div class="mb-3">
                        <label for="studentname" class="form-label " style="font-family:Poppins;">Student Name :</label>
                        <input type="text" class="form-control" id="studentname" name="studentname">
                        </div>
                        <div class="mb-3">
                        <label for="NRIC" class="form-label" style="font-family: Poppins;">NRIC :</label>
                        <input type="text" class="form-control" id="nricid" name="nric">
                        </div>
                        <div class="mb-3 mt-5">
                        <button type="submit" class="btn btn-outline-primary d-grid gap-2 col-5 ml-auto mr-auto">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
          </div>

          <div class="container display-flex justify-content-center align-items-center mt-10">
            <div class="row border rounded-5 p-3 bg-white shadow box-area ml-auto mr-auto">
                <h1 class="centered-text2" style="font-family: Poppins;">Program Registration For BioDyslexia</h1>
                <br><br>
                <div>
                    <h4 class="centered-text3" style="font-family: Poppins;">4M Saturday Tuition Class</h4>
                </div>
                <br>
                <div>
                    <h1><b>Saturday Class :</b> RM 600 (T-Shirt Excluded)</h1><br>
                    <h1><b>(One Time Payment and non-refundable)</b></h1>
                    <h1>Monthly Fee : RM 275 // Total : RM 875</h1><br><br>
                    <h1><b>Online Class :</b> RM 600 (Per Class per subject 1 Hour)</h1><br>
                    <h1><b>(One Time Payment and non-refundable)</b></h1>
                    <h1>Monthly Fee : RM 275 // Total : RM 875</h1><br><br>
                    <h1><b>For BioDyslexia Educational Diagnostic Assessment Appointment please contact us via Whatsapp.</b></h1>
                </div>
                <div>
                    <form action="{{url ('addfourmsatdata')}}" method="post">
                      @csrf
                    <div>
                    <h4 class="centered-text3 mt-5" style="font-family: Poppins;">Preferer Programme</h4>
                    </div>
                    <div class="mb-3">
                        <label for="programme" class="form-label" style="font-family:Poppins;" >Choose your Programme :</label>
                        <select name="progselect" id="progselect">
                        <option disabled selected value> -- select an option -- </option>
                            <option value="4M Daily Class (Physical)">4M Daily Class (Physical Class) (1 Days 3 Hours) RM 875</option>
                            <option value="4M Daily Class (Online)">4M Daily Class (Online Class) (3 Days, 1 Day 1 Hour) RM 875</option>
                            <option value="BioDyslexia Educational Diagnostic">BioDyslexia Educational Diagnostic Assessment Appointment (RM200 + RM50 Report (optional)</option>
                            <option value="BioDyslexia Educational Assessment">Online BioDyslexia Educational Assessment (RM50)</option>
                        </select>
                        </div>
                        <div>
                        <h4 class="centered-text3 mt-5" style="font-family: Poppins;">Session Physical Class</h4>
                        <h3 class="centered-text3 mb-5">For online class please mention the days and time prefer in the other section.</h3>
                        </div>
                        <div class="mb-3">
                        <label for="time" class="form-label" style="font-family:Poppins;" >Choose your time :</label>
                        <select name="timeselect" id="timeselect">
                        <option disabled selected value> -- select an option -- </option>
                            <option value="Only Saturday class (9:30am - 12:30pm)">Only Saturday class (9:30am - 12:30pm)</option>
                        </select>
                        <input type="text" class="form-label" name="timeselect2" placeholder="Online class here..">
                        <p><b>* Please enter "None" in online class field before proceeding.</b></p>
                        </div>
                        <div class="mb-3">
                        <label for="studentname" class="form-label " style="font-family:Poppins;">Student Name :</label>
                        <input type="text" class="form-control" id="studentname" name="studentname">
                        </div>
                        <div class="mb-3">
                        <label for="NRIC" class="form-label" style="font-family: Poppins;">NRIC :</label>
                        <input type="text" class="form-control" id="nricid" name="nric">
                        </div>
                        <div class="mb-3 mt-5">
                        <button type="submit" class="btn btn-outline-primary d-grid gap-2 col-5 ml-auto mr-auto">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
          </div>
</body>
</html>