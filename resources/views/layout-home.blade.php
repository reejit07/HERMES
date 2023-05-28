<html>
<head>
       <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <title>@yield('tittle')</title>
    <script src="{{ asset('Javascript/jquery.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/font.css') }}">
<link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  @section("csslink")
        @show

</head>

<body>

<div id="main">
    @section("main")
        @show
     </div>   
        
       
 @section("script")
  @show

  
</body>
</html>