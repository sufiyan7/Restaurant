<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Restaurant</title>
    <!-- CHANGE THIS TITLE FOR EACH PAGE -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Custome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

    <!-- Custome Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500" rel="stylesheet">

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
         <a class="navbar-brand" href="/"><img src="img/logo.png" alt="logo"></a>
       </div>
       <div class="collapse navbar-collapse" id="myNavbar">
         <ul class="nav navbar-nav navbar-right">
           <li class="{{Request::is('/') ? "active":""}}"><a href="/">Home</a></li>
           <li class="{{Request::is('menu') ? "active":""}}"><a href="/menu">Menu</a></li>
           <li><a href="#">Reservation</a></li>
           <li class="{{Request::is('contact') ? "active":""}}"><a href="/contact">Contact Us</a></li>
         </ul>
       </div>
     </div>
   </nav>
    <!-- Navbar Ends -->

    @yield('content')



    <div id="footer" style="position:static;">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <p class="text-muted">© 2017, Barbeque Nation, All rights reserved</p>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <p class="text-muted">Address : </p>
            <p>2nd Floor, Korum Mall, Mangal Pandey Road, Near Cadbury Compound, Eastern Express Highway, Thane West, Thane, Mumbai, Maharashtra 400606</p>
          </div>
        </div>

      </div>
    </div>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    var $item = $('.carousel .item');
    var $wHeight = $(window).height();
    $item.eq(0).addClass('active');
    $item.height($wHeight);
    $item.addClass('full-screen');

    $('.carousel img').each(function() {
      var $src = $(this).attr('src');
      var $color = $(this).attr('data-color');
      $(this).parent().css({
        'background-image' : 'url(' + $src + ')',
        'background-color' : $color
      });
      $(this).remove();
    });

    $(window).on('resize', function (){
      $wHeight = $(window).height();
      $item.height($wHeight);
    });

    $('.carousel').carousel({
      interval: 6000,
      pause: "false"
    });
    </script>



  </body>
</html>
