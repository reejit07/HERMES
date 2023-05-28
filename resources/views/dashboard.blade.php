
@extends('layout-navbar-T1')

@section("tittle","Dashboard-$username")

 @section("csslink")
<link rel="stylesheet" type="text/css" href="{{ asset('css/dsb.css') }}">

@endsection
@section("Navcustomize")
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">
@endsection

@section("navbartittle","Dashboard")
@section("navlink1","Profile")
@section("navlink2","Change Password")
@section("navlink3","Logout")
@section("Navlink1","profile")
@section("Navlink2","changepassword")
@section("Navlink3","logout")




 @section("main")


<div id="dashboard" class="container-fluid" style="position:relative; top:15px;">


      <div class="row d-flex flex-column " id="x1">
  <div class="col-9 col-md-4 team">
  <div class="drop mb-3"> 
    <div class="content">
             <h3>Create Room</h3>
                <p>With hermes now you can create rooms and chat with your friends . 
                  Hermes has introduced a unique feature to value your privacy.
                  Hermes allows you to set your own encryption key </p>
                
                <a href="/chatroom"  class="red">START</a>
              </div>
            </div>

            </div>



</div>


</div>


 @endsection



 @section("script")
 <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
@endsection



