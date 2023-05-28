<html>
<head>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Forgot Password</title>
  <link rel="shortcut icon" type="image" href="{{ asset('pic/hermeslogo.png.png') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/font.css') }}">
<link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/forgot.css') }}">
</head>
<body>
     
         
     <div id="login" class="container-fluid">
     @if($errors->any())
<div class="alert alert-danger">Please enter OTP</div>
@endif

   @if($id==1)
<div class="alert alert-danger">OTP didn't matched!!</div>
@endif
 @if($id==2)
   
<div class="alert alert-info">OTP sent ! Valid for 5 minutes </div>
@endif


    <form method="post" action="new"> 
         {{@csrf_field()}} 
      
 
   <div class="mb-3">
    <input type="text" class="form-control" name="otp" id="exampleInputEmail1" placeholder="OTP" required>
    
  </div>
  <br>
  <button type="submit" class="btn btn-primary" name="submit"><h6>SUBMIT</h6></button>
    
  </form>
   
</div>

<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>

