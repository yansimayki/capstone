<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{!! csrf_token() !!}" />
    <title>{{ $title}}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" >
</head>
<body>
   
   <div class="wrapper">
        <h1>Teacherlogin</h1>
        <div class="inputbox">
            <input type="text" placeholder="Username" id="txtUsername"><i class="fa-solid fa-user"></i>
        </div>

        <div class="inputbox">
            <input type="password" placeholder="Password" id="txtPass"><i class="fa-solid fa-lock"></i>
        </div>

        <button class="btn" id="btnLogin">Login</button>
      
        
        
   </div>
</body>
</html>

<script src="{{ asset('assets/css/bootstrap-5.3.0/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('assets/js/jquery-3.6.3.min.js') }}"></script>
<script src="{{ asset('assets/js/modules/adminlogin.js') }}"></script>


