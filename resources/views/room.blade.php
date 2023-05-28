@extends('layout-room')
@section("tittle","Room-$Username")

 @section("csslink")

   <meta name="csrf-token" content="{{csrf_token()}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/room.css') }}">
@endsection
<!--navbar-->

 @section("main")
 <div class="container-fluid">
  <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                <img id="main" src ="{{ asset('pic/user.png') }}" align="right" style=" height:30px; width:30px; display:inline; position:absolute; left:150px; top:15px; z-index:100;">
              
                <a class="sidelinks">CHATROOM </a>

                </li>
                <li>
                    <a class="sidelinks"  id="exit">LOG OUT</a>
                </li>
                <li>
                <a class="sidelinks" id="leave">EXIT ROOM</a>
                </li>
                <li>
        <a class="dropdown-toggle sidelinks" id="navbarDropdownx" >
          ROOM DETAILS
        </a>      
         <div class="dropdown-menu" aria-labelledby="navbarDropdownx" id="menu">
         <a class="dropdown-item sidelinks" type="button">ROOM - {{$room}}</a>
    <a class="dropdown-item sidelinks" type="button">KEY - {{$key}}</a>
    <a class="dropdown-item sidelinks" type="button"><span class="members"></span></a>
        </div>
</li>



      </ul>
           

        </div>
        </div>   
        
        

    <div id="page-content-wrapper" style="height:100%;">
 
                <div class="row d-flex justify-content-center" style="height:100%;">
               
                
                    <div class="col-12 col-md-10" style="height:100%;">

                           
                 <div class="card card-bordered" style="height:100%;">

                 <div class="form-check form-switch d-flex justify-content-between m">  
                
                 <div>
                </div>
                 <div>
                 <image src="{{ asset('pic/hermeslogo.png.png') }}" style="display:inline; height:40px; width:40px;" id="hermes"> 
                <span class="x">ermes</span>
                </div>
                 
                <div>
                <button  type="button" class="btn" id="menu-toggle"> ☰</button> 
                </div>

                </div>
                
              
                
               
                    <div class="ps-container ps-theme-default ps-active-y" id="chat-content" style="overflow-y: scroll !important; height:100%;  !important;">
                    <br>
                        <div class="media media-chat " id="medianew"> 
                       
                     
                        </div>
                        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                            <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps-scrollbar-y-rail" style="top: 0px; height: 0px; right: 2px;">
                            <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 2px;"></div>
                        </div>
                    </div>
                    <div class="publisher bt-1 border-light n"> <input class="publisher-input" type="text" placeholder="Type your message.." id="message"> 
                      <image id="down" src="{{ asset('pic/down-arrow.png') }}" width="30px" height="35px" align="right">
                      <img src="{{ asset('pic/go.png') }}" style="display:inline; height:30px; width:35px;" id="send" name="send" >
                    </div>
                    
                
                
                    </div>
                </div>

             
            </div>
         
    </div>






@endsection


 @section("script")
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js' integrity='sha512-RdSPYh1WA6BF0RhpisYJVYkOyTzK4HwofJ3Q7ivt/jkpW6Vc8AurL1R+4AUcvn9IwEKAPm/fk7qFZW3OuiUDeg==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
 <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
 <script src="{{ asset('Javascript/cookie.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>

//navbar toggle
 $("#navbarDropdownx").click(function(){
 
 if($("#menu").attr('class')=="dropdown-menu")
 
   $("#menu").attr('class','dropdown-menu-show');
   else
   $("#menu").attr('class','dropdown-menu');
 });
 
 $('#menu-toggle').click(function(e){
   e.preventDefault();
$('#wrapper').toggleClass('toggled');

    });

    $('#remove').click(function(e){
   e.preventDefault();
$('#wrapper').toggleClass('toggled');

    });
$(document).ready(function(){
var  my=true;
$('#flexSwitchCheckDefault').prop('checked',false);


});

var  my=true;
  

  $('#exit').click(function(){

    var clientmsg ='{{$Username}} has logged out';
      let _token =$('meta[name="csrf-token"]').attr('content');
   $.post('msg',{text:clientmsg ,room:'{{$room}}',KEY:'{{$key}}',_token:_token},function(){
  window.location='roomlogout';
   });

  });   

        
  $('#leave').click(function(){
    swal("ALL YOUR CHATS WILL BE CLEARED AND WILL NOT KEEP YOU AS ROOM MEMBER CLICK YES  TO PROCEED: ")
.then((value) => {
  if(value!=null)
  {
  window.location='deleteroom';
  }
});
  });


jQuery(function($) {
    $('#chat-content').on('scroll', function() {
        if($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {
               document.getElementById('down').style.display ='none';
        }
    })
});




   $(window).bind('beforeunload', function(){
        window.location='/deleteroom';
       
   });

    //out

         function rutFunction()
   {
     
     var session ='<%=Session[`room`] != null%>';
            if (session == false) {
                window.location='/deleteroom';
            }
      
           
         
       
      
   
   }
   
  

 
   var diff=0;
   var members=0;
   setInterval(runFunction,1000);
    var check=true;
    var run=0;
   function runFunction()
   {
      let _token =$('meta[name="csrf-token"]').attr('content');
       rutFunction();
     
      
         $.post('msg1',{room:"{{$room}}",KEY:'{{$key}}',username:'{{$Username}}',_token:_token},function(data,status)
         {
       
              $.each(data ,function(index,data){
                if(index=="data")
                {
                  
               
                  $.each(data ,function(ind,value){
                   
                      if(ind==run)
                      {
                      $("#medianew").append(value);
                      run=run+1;
                        }  
                  });

                  

                }

              if(index=="diff")
                diff=data;

               if(index=="members")
                 members=data;

               var myCookie=diff;

              if(myCookie>0)
             document.getElementById('down').style.display ='inline';
    
              });

         },'json');
   



           $('.members').html('MEMBERS '+members+'/10');
   
              
   }
  
   $(document).ajaxComplete(function() {
      
      
       
            if(my==true) 
            {
             $('#chat-content').scrollTop($('#chat-content').prop('scrollHeight')); 
              document.getElementById('down').style.display ='none';
                
            }
       });
  
  
   
 //enter key 
var input = document.getElementById('message');
input.addEventListener('keyup', function(event) {
  if (event.keyCode === 13) {
    event.preventDefault();
    my=true;
    document.getElementById('send').click();
  }
});

 $('#down').click(function(){
        $('#chat-content').scrollTop($('#chat-content').prop('scrollHeight')); 
       document.getElementById('down').style.display ='none';
});





// enters database

$('#send').click(function(){
my =true;
   let _token =$('meta[name="csrf-token"]').attr('content');
var clientmsg = $('#message').val();
  $.post('msg',{text:clientmsg ,room:"{{$room}}",KEY:'{{$key}}',_token:_token});
  $('#message').val('');
  return false;

});
 

 
if (window.addEventListener) {
   
    window.addEventListener( 'mousedown', function(){
      
           my=false;
        
    });
}

$(window).bind('mousewheel DOMMouseScroll', function(event){
    if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {
        my=false;
    }
    else {
         my=false;
    }
});

 if (window.addEventListener) {
   
    window.addEventListener('touchstart', function(){
     
           my=false;
        
    });
}
   


$("#medianew").on("click","div",function(){

if(switc%2!=0)
$(this).remove();

});

$("#medianew").on("click","#main",function(){

  var block = $( ".messagebody" );
 var repliedto= $( "#medianew" ).find( block ).html();
   repliedto="<span style='color:black;'>"+"[ REPLIED TO - "+repliedto+" ]</span>";
  swal("Reply Message:", {
  content: "input",
})
.then((value) => {
   if(value!=null)
   {

  var clientmsg =repliedto+"<br>"+value;
    let _token =$('meta[name="csrf-token"]').attr('content');
  $.post('msg',{text:clientmsg ,room:"{{$room}}",KEY:'{{$key}}',_token:_token});
   }
});
      
});

var switc=0;

$('#flexSwitchCheckDefault').click(function(){


       switc=switc+1; 

});


</script>
@endsection
