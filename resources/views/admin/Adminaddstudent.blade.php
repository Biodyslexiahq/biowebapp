@extends('admin.admin-master')

@section('content')

<div class="container display-flex justify-content-center align-items-center">
            <div class="row border rounded-5 p-3 bg-white shadow box-area ml-auto mr-auto">
                <h1 class="centered-text2" style="font-family: Poppins;">Program Registration For BioDyslexia</h1>
                <br><br>
                <div>
                    <h4 class="centered-text3" style="font-family: Poppins;">Student Information</h4>
                </div>
                <div>
                    <form action="" method="post">
                        <div class="mb-3">
                        <label for="studentname" class="form-label " style="font-family:Poppins;">Student Name :</label>
                        <input type="text" class="form-control" id="studentname" name="studentname">
                        </div>
                        <div class="mb-3">
                        <label for="studentage" class="form-label " style="font-family:Poppins;">Student Age :</label>
                        <input type="text" class="form-control" id="studentname" name="studentname">
                        </div>
                        <div class="mb-3">
                        <label for="Gender" class="form-label" style="font-family:Poppins;" >Gender :</label>
                        <select name="genderselect" id="gender">
                        <option disabled selected value> -- select an option -- </option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        </div>
                        <div class="mb-3">
                        <label for="NRIC" class="form-label" style="font-family: Poppins;">NRIC :</label>
                        <input type="text" class="form-control" id="nricid" name="nric">
                        </div>
                        <div class="mb-3">
                        <label for="ethnic" class="form-label" style="font-family:Poppins;" >Ethnic Background :</label>
                        <select name="ethnicselect" id="ethnic">
                        <option disabled selected value> -- select an option -- </option>
                            <option value="Malay">Malay</option>
                            <option value="Chinese">Chinese</option>
                            <option value="Indian">Indian</option>
                        </select>
                        <input type="text" class="form-label" name="enthnicothers" placeholder="Other Ethnic here..">
                        </div>
                        <div class="mb-3">
                        <label for="school grade" class="form-label" style="font-family: Poppins;">School Grade :</label>
                        <input type="text" class="form-control" id="schoolgrade" name="schoolgrade">
                        </div>
                        <div class="mb-3">
                        <label for="Home Address" class="form-label" style="font-family: Poppins;">Home Address :</label>
                        <input type="text" class="form-control" id="address" name="studentaddress">
                        </div>
                        <div class="mb-3">
                        <label for="fathername" class="form-label" style="font-family: Poppins;">Father's Name :</label>
                        <input type="text" class="form-control" id="fathername" name="fathername">
                        </div>
                        <div class="mb-3">
                        <label for="fathernum" class="form-label" style="font-family: Poppins;">Father's Number :</label>
                        <input type="text" class="form-control" id="fathernum" name="fathernum">
                        </div>
                        <div class="mb-3">
                        <label for="fatheremail" class="form-label" style="font-family: Poppins;"> Father's Email :</label>
                        <input type="text" class="form-control" id="fatheremail" name="fatheremail">
                        </div>
                        <div class="mb-3">
                        <label for="mothername" class="form-label" style="font-family: Poppins;"> Mother's Name :</label>
                        <input type="text" class="form-control" id="mothername" name="mothername">
                        </div>
                        <div class="mb-3">
                        <label for="motheremail" class="form-label" style="font-family: Poppins;"> Mother's Email :</label>
                        <input type="text" class="form-control" id="motheremail" name="motheremail">
                        </div>
                        <div class="mb-3">
                        <label for="mothernum" class="form-label" style="font-family: Poppins;"> Mother's Number :</label>
                        <input type="text" class="form-control" id="mothernum" name="mothernum">
                        </div>
                        <br><br>
                        <div class="mb-6">
                        <h4 class="centered-text3" style="font-family: Poppins;">Programme Registration</h4>
                        </div>
                        <div class="mb-3">
                        <label for="programme" class="form-label" style="font-family:Poppins;" >Choose your Programme :</label>
                        <select name="genderselect" id="gender">
                        <option disabled selected value> -- select an option -- </option>
                            <option value="Daily Class">Daily Class (Physical/Online Class) (New Students are required to take the Biodyslexia VAKT Test)</option>
                            <option value="Saturday Class">Saturday Class (Physical/Online Class) (New Students are required to take the Biodyslexia VAKT Test)</option>
                            <option value="Bioiqra Class">Bioiqra Class (Class 2x per week) (Registration RM500 + Monthly Fee Rm300)</option>
                            <option value="VAKT">VAKT BioAbadys Class (3 Class RM250)</option>
                            <option value="VAKT Screening Test">BioDyslexia VAKT Screening Test & Assessment (RM150)</option>
                        </select>
                        </div>
                        <div class="mb-3">
                        <button type="submit" class="btn btn-outline-primary d-grid gap-2 col-5 ml-auto mr-auto">Submit</button>
                        </div>
                        
                    </form>
                </div>
            </div>
          </div>

@endsection