<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-5.3.0/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nav.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" >
    <meta name="_token" content="{!! csrf_token() !!}" />
</head>
<body>

<div class="container-fluid bar">
    <div class="row flex-nowrap ">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="dashboard" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-5 d-none d-sm-inline fw-bolder"> < / > </span><span class="fs-5 d-none d-sm-inline fw-bolder">Codeversity</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="dashboard" class="nav-link align-middle px-0">
                            <i class="fs-4 fas fa-tachometer-alt text-white"></i><span class="ms-1 d-none d-sm-inline text-white">Dashboard</span>
                        </a>

                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 fas fa-user-graduate text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Student</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="liststudent" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">List Student</span></a>
                            </li>
                            <li>
                                <a href="enrollstudent" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Enroll Student</span></a>
                            </li>
                           
                        </ul>
                    </li>
                   
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 fa-solid fa-chalkboard-user text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Teacher</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="listteacher" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">List Teacher</span></a>
                            </li>
                            <li>
                                <a href="addteacher" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Apply teacher</span></a>
                            </li>
                        </ul>
                    </li>

                 
                    
                    <li>
                        <a href="adminuser" class="nav-link px-0 align-middle">
                            <i class="fs-4 fa-solid fa-user text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">User</span> </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4 ">
                    <a href="#" class="btnUSer d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('assets/images/sasuke.jpg') }}" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">Name</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3">
            <section>
            @yield('content')
            
            </section>
          
        </div>
    </div>
</div>
    
</body>
</html>



<script src="{{ asset('assets/css/bootstrap-5.3.0/js/bootstrap.bundle.min.js') }}"></script>




