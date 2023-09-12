@extends('layouts.nav')



@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/addteacher.css') }}">

<h1>Apply Teacher:</h1>
<div class="wrapper">
    <div class="imgwrapper">
        <div class="container">
            <div class=imgcontainer>
                    <div id="profimg"> <img src="{{ asset('assets/images/sasuke.jpg')}}"></div>
            </div>
            <input type="file" class="form-control" id="customFile">
            <br/>
            <button id="btnUpload">Upload</button>
        </div>
           
    </div>

        <div class="infowrapper">
             

        <div class="sectioncontainer">
                <div class="emailinpt">
                    <label class="form-label" for="inputGrade">Grade Handle:</label>
                    <select class="gendersel inptgrade" id="txtGrade">
                        <option selected disabled>Select Grade...</option>
                        <option value="Grade7">Grade 7</option>
                        <option value="Grade8">Grade 8</option>
                  </select>
                </div>

                <div class="emailinpt">
                    <label class="form-label" for="inputSection">Section Handle:</label>
                    <select class="gendersel inptsect" id="txtSection">
                        <option selected disabled>Select Section...</option>
                        <option selected></option>
                  </select>
                </div>
            </div>
        

            <div class="infocontainer">
                <div class="space">
                    <label class="form-label" for="typeEmailX">Firstname:</label>
                    <input type="text" id="txtFname" class="form-control form-control-sm inptsize" />
                   
                </div>

                <div class="space">
                    <label class="form-label" for="typeEmailX">Middlename:</label>
                    <input type="text" id="txtMname" class="form-control form-control-sm inptsize" />
                </div>

                <div>
                    <label class="form-label" for="typeEmailX">Lastname:</label>
                    <input type="text" id="txtLname" class="form-control form-control-sm inptsize" />
                </div>
            </div>

            <div class="statcontainer">
                <div class="space">
                    <label class="form-label" for="typeEmailX">Date of Birth:</label>
                    <input type="date" id="txtBirthdate" class="form-control form-control-sm inptsize" />
                   
                </div>

                <div class="gender space ">
                    <label class="form-label" for="typeEmailX">Gender:</label>
                    <select class="gendersel inptsizegender" id="txtGender">
                        <option selected disabled>Choose...</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                  </select>
                </div>

                <div>
                    <label class="form-label" for="typeEmailX">Age:</label>
                    <input type="text" id="txtAge" class="form-control form-control-sm inptsize" />
                </div>
            </div>


            
            <div class="contactcontainer">
                <div class="emailinpt">
                    <label class="form-label" for="typeEmailX">Email:</label>
                    <input type="email" id="txtEmail" class="form-control form-control-sm" />
                   
                </div>

                <div class="contactinpt">
                    <label class="form-label" for="typeEmailX">Contact No:</label>
                    <input type="text" id="txtContact" class="form-control form-control-sm" />
                </div>
            </div>


            <div class="addresscontainer">
                <div>
                    <label class="form-label" for="typeEmailX">Address:</label>
                    <input type="text" id="txtAddress" class="form-control form-control-sm" />
                </div>
            </div>



            
            <div class="addressinfocontain">
                <div class="space">
                    <label class="form-label" for="typeEmailX">City:</label>
                    <input type="text" id="txtCity" class="form-control form-control-sm inptsize" />
                   
                </div>

                <div class="space">
                    <label class="form-label" for="typeEmailX">District:</label>
                    <input type="text" id="txtDistrict" class="form-control form-control-sm inptsize" />
                </div>

                <div>
                    <label class="form-label" for="typeEmailX">Zip Code:</label>
                    <input type="text" id="txtZip" class="form-control form-control-sm inptsize" />
                </div>
            </div>

          

            <div class="btncontianer">
                <div class="mt-4 pt-2">
                    <button type="button" class="btn btn-primary" id="btnEnroll">Add</button>
                </div>
              </div>
        </div>
</div>
    @endsection



<script src="{{ asset('assets/js/jquery-3.6.3.min.js') }}"></script>
<script src="{{ asset('assets/js/modules/addteacher.js') }}"></script>

