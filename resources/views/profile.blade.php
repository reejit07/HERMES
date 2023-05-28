
@extends('layout-In')

@section("tittle","Profile-$USERNAME")

 @section("csslink")
<link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}">
@endsection

@section("navbartittle","Profile")
@section("navlink1","Dashboard")
@section("navlink2","Change Password")
@section("navlink3","Logout")
@section("Navlink1","dashboard")
@section("Navlink2","changepassword")
@section("Navlink3","logout")


 @section("main")

    <div class="container">
          <div class="main-body">
    
        
               <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                  <img id="main" src ="\pic/user.png" align="right" style=" height:40px; width:40px; display:inline;">
                    <div class="mt-3">
                      <h3 >{{$USERNAME}}</h3>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 gstyle1" >Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary gstyleone">
                    {{$EMAIL}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 gstyle1">Logins</h6>
                    </div>
                    <div class="col-sm-9 text-secondary gstyleone">
                    {{$LOGIN}}
                    </div>
                  </div>
                  <hr>
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 gstyle1">Hermes id</h6>
                    </div>
                    <div class="col-sm-9 text-secondary gstyleone">
                    #{{$ID}}
                    </div>
                  </div>
                  <hr>
                </div>
              </div>
              
            </div>
          </div>
        </div>
    </div>
 
 

 @endsection




 @section("script")
 <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>


@endsection



