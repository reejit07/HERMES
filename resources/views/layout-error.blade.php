<html>
<head>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('tittle')</title>
  <link rel="shortcut icon" type="image" href="{{ asset('pic/hermeslogo.png.png') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/font.css') }}">
<link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body style=" background-color: #F3F3F3;">
    
<div class="container-fluid">
<div class="row h-100">
    <div class ="col-12 d-flex flex-column"> 
      <h2 class="text-center">@yield('statement1')</h2>
      <p class="lead text-center">@yield('statement2')</p>
     <h6 class="text-center">BACK TO <a rel="canonical" href="home" >HERMES</a></h6>
      </div>
    </div>


</div>
</div>


</body>
</html>