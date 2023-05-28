@extends('layout-form')
@section("tittle","HERMES")

 @section("csslink")
<link rel="stylesheet" type="text/css" href="{{ asset('css/signup.css') }}">
@endsection

@section("errors")
@if($errors->any())
<div class="alert alert-danger">Missing credentials</div>
@endif

 @if(session('failure'))
 <div class="alert alert-danger"> Username or email is already taken </div>
@endif
@if(session('success'))
 <div class="alert alert-success">Account Made Succesfully </div>
@endif
@endsection

 @section("main")
  
 <image src="{{ asset('pic/hermeslogo.png.png') }}" style="height:50px; width:50px; padding:5px;">

<h2>SIGN UP</h2>
  <form  method="post" action="signupform">
      {{@csrf_field()}}
     
<div class="mb-4">
<div class="row g-2">
  <div class="col">
    <input type="text" class="form-control" placeholder="Username" name="Username" id="validationDefault01">
  </div>
</div>
</div>

 <div class="mb-4">
<div class="row g-2">
  <div class="col">
      <input type="email" class="form-control" placeholder="Email" name="email" id="validationDefaultUsername">
  </div>
</div>
</div>

  <div class="mb-3">
  <input type="Password" placeholder="Create Password"  oninput="myFunction()" class="form-control" name="password" id="validationDefault07" >
  <h7 class="text-danger text-center">@error('password')
    @if($message=="The password must be at least 8 characters.")
       &#9432;&nbsp;{{$message}}
    @endif
  @enderror</h7>

    <div id="check1"> <div id="mychart3_status">
       <div id="mychart3_bar"></div>
         </div></div>

  </div>
 <div class="mb-3">
    <button class="btn btn-primary" onclick="PosEnd(validationDefault07);" type="submit" name="submit"><h6>SUBMIT</h6></button>
  </div>
</form>
<br>
   <h6>ALREADY HAVE ACCOUNT? <a rel="canonical" href="login">LOGIN</a></h6>


 @endsection

 @section("script")
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('Javascript/signup.js') }}"></script>
<script src="{{ asset('Javascript/formcolor.js') }}"></script>
@endsection