
@extends('layout-home')
@section("tittle","HERMES")

 @section("csslink")
<link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
@endsection



 @section("main")
  
 
 <div class="container-fluid" id="mainbody">
  
<div class="first">

    <div class="row">
        <div class ="col-6">
        <p class="add"> HERMES</p>
      </div>
      <div class ="col-6 d-flex justify-content-end">
      <a href="login" style="padding:10px 0px 0px 0px;"><button class="btn btn-primary loggedin">Log In</button><a>
      </div>
    </div>


    <div class="row" style="height:85%;">
    <div class ="col-12 col-div" id="gesuredZone"> 


      <div id="change" style="height:40%;">


      <h2 class="text-center">JOIN NOW & START CHATTING </h2>
      <p class="lead text-center"><em>Secure,reliable...</em></p>
      <div class="text-center">
      <a href="signup"><button class="btn btn-primary" style="width:250px;"><h5>GET STARTED </h5></button><a>
      </div>

 </div>

<div class="arrows">
<div id="left"  onclick="myFunctionl()" onmouseover="mouseOverl()" onmouseout="mouseOutl()">
 <img src="{{asset('pic/left.png')}}"  >
</div>

<div id="right"  onclick="myFunctionr()" onmouseover="mouseOverr()" onmouseout="mouseOutr()">
 <img src="{{asset('pic/right.png')}}" >
</div>

</div>

 </div>



    <div class ="col-12"> 
    <div class="navigate text-center">
  <div class="dot" id="p1">
  </div>
  <div class="dot" id="p2">
  </div>
  <div class="dot" id="p3">
  </div>
  <div class="dot" id="p4">
  </div>
</div>
</div>


</div>

   






</div>


 
  
<div style="display:none;">

  
<div id="one">
<h2 class="text-center">JOIN NOW & START CHATTING </h2>
<p class="lead text-center"><em>Secure,reliable...</em></p>
<div class="text-center">
<a href="signup"><button class="btn btn-primary" style="width:250px;"><h5>GET STARTED </h5></button><a>
</div>
</div>







    <div id="two">
      <div class=" text-center" >
    <h1 >PRIVACY</h1>
    <p class="lead"><em>
    All your message are secured with an encryption key chosen by you </em></p>
    <img src="{{asset('pic/secured.gif')}}" height="180px" width="180px">
</div>  
  </div>
  


      <div id="three">
      <div class=" text-center">
    <h1 >CREATE ROOM</h1>
    <p class="lead"><em>
    With hermes now you can create rooms and chat with your friends from around the world</em></p>
    <img src="{{asset('pic/talk.gif')}}" height="300px" width="300px">
  </div>
</div>

<div id="four">
  <div class="text-center">  <h2>
                    Contact
                    <em>website </em>
                    developer 
                </h2></div>
  <div class="p-2 d-flex justify-content-center"><a  href="mailto:hermesmessenger000@gmail.com"><img src="{{asset('pic/Gmail.png')}}" class="call" height="50px" width="50px"></a> 
  <a  href="https://in.linkedin.com/in/reejit-chetry-317685196" style="position:relative; left:10px;"><img src="{{asset('pic/linke.png')}}" class="call" height="50px" width="50px"></a>       </div>
   
</div>
    
</div>


  
</div>
   



 @endsection

 @section("script")
 <script src="{{asset('bootstrap/js/bootstrap.min.js') }}"></script>
 <script src="{{asset('Javascript/home.js')}}"></script>
@endsection