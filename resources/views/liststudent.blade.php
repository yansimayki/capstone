@extends('layouts.nav')




<link rel="stylesheet" href="{{ asset('assets/css/liststudent.css') }}">


@section('content')
<h1>Enrolled Student:</h1>

    <div>
        <table class="table fs-6 table-bordered">
                <tr class="table-dark">

                    <th>Grade</th>
                    <th>Section</th>
                    <th>FullName</th>
                    <th>Birthdate</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                <tr>
        
           
                @foreach($data as $key => $objs)
                <tr id="tr_<?=$objs->id;?>">
                    <td>{{$objs->grade}}</td>
                    <td>{{$objs->section}}</td>
                    <td>{{$objs->first_name}} {{$objs->middle_name}} {{$objs->last_name}}</td>
                    <td>{{$objs->birthdate}}</td>
                    <td>{{$objs->gender}}</td>
                    <td>{{$objs->age}}</td>
                    <td>{{$objs->email}}</td>
                    <td>{{$objs->contact}}</td>
                    <td>{{$objs->address}} {{$objs->city}}</td>
                    <td>
                       <a class="text-success fa-solid fa-eye" onclick="_view(<?=$objs->id;?>)"></a>
                       <a class="text-primary fa-solid fa-pen-to-square" onclick="_edit(<?=$objs->id;?>)"></a>
                       <a class="text-danger fa-solid fa-trash-can" onclick="_remove(<?=$objs->id;?>)"></a>
                    </td>
                
                   
                @endforeach
            </table>
        </div>

<div>
    <div class="modal" tabindex="-1" id="modalview">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <input type="hidden" id="txtUserId" class="form-control form-control-lg" />
      <div class="viewwrapper">
     
            <div>
            <div class=imgcontainer>
                    <div id="profimg"> <img src="{{ asset('assets/images/naruto.jpg')}}"></div>
            </div class="grade">
                 <p><strong>Grade: </strong> <span id="Grade"></p>
                 <p><strong>Section: </strong> <span id="Section"></p>
            </div>
            <div class="info">
                 <p><strong>Fullname: </strong> <span id="Fname"></span> <span id="Mname"></span> <span id="Lname"></span></p>
                 <p><strong>Birthdate: </strong> <span id="Birthdate"></span></p>
                 <p><strong>Gender: </strong> <span id="Gender"></span></p>
                 <p><strong>Age: </strong> <span id="Age"></span></p>
                 <p><strong>Email: </strong> <span id="Email"></span></p>
                 <p><strong>Contact: </strong> <span id="Contact"></span></p>
                 <p><strong>Address: </strong> <span id="Address"></span> <span id="City"></span></p>
                 <p><strong>District: </strong> <span id="District"></span></p>
                 <p><strong>Zip: </strong> <span id="Zip"></span></p>
                 <p><strong>Father's name: </strong> <span id="Fathername"></span></p>
                 <p><strong>Mother's name: </strong> <span id="Mothername"></span></p>
            </div>
            
       
      </div>
            
          
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</div>

        <!-- Edit -->
<div class="modal" tabindex="-1" id="modaledit">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <input type="hidden" id="txtUserId" class="form-control form-control-lg" />
      <div class="infowrapper">
      <div class="sectioncontainer">
                <div class="emailinpt">
                    <label class="form-label" for="inputGrade">Grade:</label>
                    <select class="gendersel inptgrade" id="txtGrade">
                        <option selected disabled>Select Grade...</option>
                        <option value="Grade7">Grade 7</option>
                        <option value="Grade8">Grade 8</option>
                  </select>
                </div>

                <div class="emailinpt">
                    <label class="form-label" for="inputSection">Section:</label>
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



            
            <div class="infocontainer">
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

            <div class="parentscontainer">
                <div class="fatherinpt">
                    <label class="form-label" for="typeEmailX">Father's name:</label>
                    <input type="text" id="txtFathername" class="form-control form-control-sm" />
                   
                </div>

                <div class="motherinpt">
                    <label class="form-label" for="typeEmailX">Mother's name:</label>
                    <input type="text" id="txtMothername" class="form-control form-control-sm" />
                </div>

            </div>


      </div>
      <div class="modal-footer">
   
      <button type="button" class="btn btn-primary" id="btnUpdate">Update</button>
      </div>
    </div>
  </div>
</div>


    @endsection


<script src="{{ asset('assets/js/jquery-3.6.3.min.js') }}"></script>
<script src="{{ asset('assets/js/modules/liststudent.js') }}"></script>
<script src="{{ asset('assets/js/modules/enroll.js') }}"></script>