@extends('layouts.nav')

<link rel="stylesheet" href="{{ asset('assets/css/adminuser.css') }}">
@section('content')

<h1>Admin User</h1>

<div>
<div class="btnwrapper">
        <button class="btn btn-dark" id="btnAdd">Add</button>
</div>

<div class="modal" tabindex="-1" id="modaladd">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <input type="hidden" id="txtUserId" class="form-control form-control-lg" />
      <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeEmailX">FullName</label>
                <input type="text" id="Fname" class="form-control form-control-lg" />
              </div>
              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeEmailX">Position</label>
                <input type="text" id="Position" class="form-control form-control-lg" />
              </div>
              <div class="form-outline form-white mb-4">
              <label class="form-label" for="typeEmailX">Email</label>  
              <input type="text" id="Email" class="form-control form-control-lg" />
              </div>
              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeEmailX">Username</label>
                <input type="text" id="User" class="form-control form-control-lg" />
              </div>
              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeEmailX">Password</label>
                <input type="password" id="Pass" class="form-control form-control-lg" />
              </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnSave">Add</button>
      </div>
    </div>
  </div>
</div>




    
    <div>
        <table class="table table-bordered">
                <tr class="table-dark">
                    <th>Fullname</th>
                    <th>Position</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Action</th>
                </tr>
                <tr>
        
                @foreach($data as $key => $objs)
                <tr id="tr_<?=$objs->id;?>">
                    <td>{{$objs->fullname}}</td>
                    <td>{{$objs->position}}</td>
                    <td>{{$objs->email}}</td>
                    <td>{{$objs->username}}</td>
                    <td>
                    <a class="text-success fa-solid fa-eye" onclick="_view(<?=$objs->id;?>)"></a>
                       <a class="text-primary fa-solid fa-pen-to-square" onclick="_edit(<?=$objs->id;?>)"></a>
                       <a class="text-danger fa-solid fa-trash-can" onclick="_remove(<?=$objs->id;?>)"></a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
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
                    <div id="profimg"> <img src="{{ asset('assets/images/sakura.jpg')}}"></div>
            </div class="grade">
                
            </div>
            <div class="info">
                 <p><strong>Fullname: </strong> <span id="fullname"></span></p>
                 <p><strong>Position: </strong> <span id="post"></span></p>
                 <p><strong>Email: </strong> <span id="email"></span></p>
                 <p><strong>Username: </strong> <span id="user"></span></p>
                
               
            </div>
            
       
      </div>
            
          
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


</div>





<div class="modal" tabindex="-1" id="modaledit">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <input type="hidden" id="txtUserId" class="form-control form-control-lg" />
      <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeEmailX">FullName</label>
                <input type="text" id="txtFname" class="form-control form-control-lg" />
              </div>
              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeEmailX">Position</label>
                <input type="text" id="txtPosition" class="form-control form-control-lg" />
              </div>
              <div class="form-outline form-white mb-4">
              <label class="form-label" for="typeEmailX">Email</label>  
              <input type="text" id="txtEmail" class="form-control form-control-lg" />
              </div>
              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeEmailX">Username</label>
                <input type="text" id="txtUser" class="form-control form-control-lg" />
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
<script src="{{ asset('assets/js/modules/adminuser.js') }}"></script>