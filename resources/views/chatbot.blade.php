<html>
<head>
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta name="csrf-token" content="{{csrf_token()}}">
<link rel="shortcut icon" type="image" href="{{ asset('pic/hermeslogo.png.png') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/font.css') }}">
<link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/chatbot.css') }}">
<script src="{{ asset('Javascript/jquery.js') }}"></script>

</head>

<body>
<div class="container">
	<div class="row">
	 <div id="Smallchat">
    <div class="Layout Layout-open Layout-expand Layout-right sizo" style="background-color: #3AAFA9 ;color: rgb(255, 255, 255);opacity: 5;border-radius: 10px; z-index:1000">
      <div class="Messenger_messenger">
        <div class="Messenger_header" style="background-color:#3AAFA9; color:white;">
          <h4 class="Messenger_prompt">SARATHI</h4>
           <img src ="{{ asset('pic/bot.png') }}"  height="50px" width="60px" >
           <image src="{{asset('pic/hermeslogo.png.png')}}"  id="hermes">
           <img src="{{ asset('pic/cross1.png') }}" class="divX" height="30px" width="30px" style=" align:right; "></div>
        <div class="Messenger_content" id="bodybox container">
  <div id="chatborder" class=lead" style="overflow-y: scroll; height:380px;">
  <br>
  <div class='container' id="firstmsg"><p style='position:relative; width:80%; align:right; border-radius:5px; box-shadow: 0 1px 3px rgba(0,0,0,0.2);   font-size:100%; text-align: center;'><span class='messagebody'>
  Drop a <strong>hi</strong> to start chat..
  </span></p></div>

  



          </div>
            <div class="Input Input-blank">
           <input class="Input_field" type="text" name="chat" id="chatbox" placeholder="TYPE A MESSAGE">
              <img align="right" class="send" src ="{{ asset('pic/so.png') }}" height="40px" width="40px" style="display:inline; z-index:1000;">
          </div>
        </div>
      </div>
    </div>
    <!--===============CHAT ON BUTTON STRART===============-->
                
                 <img align="right" src ="{{ asset('pic/bot.png') }}"  class="chat_on" height="50px" width="60px" style="display:inline; ">
    <!--===============CHAT ON BUTTON END===============-->
  </div>
	</div>
</div>

 </div>
 
<script src="{{ asset('Javascript/chatbot.js') }}"></script>

</body>
</html>
