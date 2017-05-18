<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin | Restaurent</title>
    <!-- CHANGE THIS TITLE FOR EACH PAGE -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Custome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>


    <!-- Navbar Starts -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
     <div class="container-fluid">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="/"><img src="{{ URL::asset('img/logo.png') }}" alt="logo"></a>
       </div>
       <div class="collapse navbar-collapse" id="myNavbar">
         <ul class="nav navbar-nav navbar-right">
           <li class="{{Request::is('admin') ? "active":""}}"><a href="/admin">Dashboard</a></li>
           <li class="{{Request::is('admin/food') ? "active":""}}"><a href="/admin/food">Food</a></li>
           <li class="{{Request::is('admin/contact') ? "active":""}}"><a href="/admin/contact">Contact</a></li>
         </ul>
       </div>
     </div>
   </nav>
    <!-- Navbar Ends -->

    @yield('content')





    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  </body>
</html>
