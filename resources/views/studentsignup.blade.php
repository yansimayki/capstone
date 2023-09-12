<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-5.3.0/css/bootstrap.min.css') }}">
    <meta name="_token" content="{!! csrf_token() !!}" />
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 ">Student Sign-Up</h2>
              <div class="form-outline form-white mb-4">
                <input type="email" id="txtFname" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">First Name</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="email" id="txtMname" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Middle Name</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="email" id="txtLname" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Last Name</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="email" id="txtEmail" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="txtPass" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>


              <button class="btn btn-outline-light btn-lg px-5" id="btnSignUp">Sign Up</button>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

            <div>
              <p class="mb-0"><a href="studentlogin" class="text-white-50 fw-bold">Log In</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>

<script src="{{ asset('assets/css/bootstrap-5.3.0/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('assets/js/jquery-3.6.3.min.js') }}"></script>
<script src="{{ asset('assets/js/modules/signup.js') }}"></script>