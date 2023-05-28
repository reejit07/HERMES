
@extends('layout-form')

@section("tittle","Room-$username")

 @section("csslink")
<link rel="stylesheet" type="text/css" href="{{asset('css/roomstart.css') }}">
@endsection



       
      
           
@section("errors")
            @if($errors->any())
<div class="alert alert-danger">ERROR : Check the information entered</div>
@endif


  
            @if(session('wrong'))
   <div class="alert alert-danger">{{session('wrong')}}</div>
      @endif
      @endsection


       @section("main")
       <image src="{{asset('pic/hermeslogo.png.png') }}" style="height:50px; width:50px; padding:5px;">
            <h3 >CHATROOM</h3>
            <form method="post" action="roomcheck" id="roomd"> 
            {{@csrf_field()}} 
 
 <div class="mb-3">
 <label for="exampleInputEmailx" class="form-label" ><span class="gstyle1"> </span></label>
   <input type="text" class="form-control" name="roomname" id="exampleInputPassword1" placeholder="Roomname">
    </div>
     <div class="mb-3">
     <label for="exampleInputEmailx" class="form-label" ><span class="gstyle1"></span></label>
   <input type="text" class="form-control" name="key" id="validationDefault07" oninput="myFunction()" placeholder="Encryption Key">
   &#9432;&nbsp;The key must be atleast 5 characters.
   <div id="check1"> <div id="mychart3_status">
       <div id="mychart3_bar"></div>
         </div></div>
   <br>
 <button type="submit" class="btn btn-primary" onclick="PosEnd(validationDefault07);" name="submit"><h6>ENTER</h6></button>
 </div>
 <br>
 </form>   
  <a href="dashboard"><h6>BACK TO DASHBOARD</h6></a>
  



 @endsection



 @section("script")
 <script src="{{asset('bootstrap/js/bootstrap.min.js') }}"></script>
 <script src="{{asset('Javascript/formcolor.js') }}"></script>
 
@endsection






   
 