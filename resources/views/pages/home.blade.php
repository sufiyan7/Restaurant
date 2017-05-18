@extends('master')

@section('content')
<div id="mycarousel" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
<ol class="carousel-indicators">
 <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
 <li data-target="#mycarousel" data-slide-to="1"></li>
 <li data-target="#mycarousel" data-slide-to="2"></li>
 <li data-target="#mycarousel" data-slide-to="3"></li>
</ol>

<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
 <div class="item">
     <img src="img/banner2.jpg" data-color="lightblue" alt="First Image">
     <div class="carousel-caption caption-left">
       <h1>
            Specialised in Chinese Cuisine
          </h1>
     </div>
 </div>
 <div class="item">
     <img src="img/banner1.jpg" data-color="firebrick" alt="Second Image">
     <div class="carousel-caption caption-right">
       <h1>
            Food to fit your Lifestyle & Health
          </h1>
     </div>
 </div>
 <div class="item">
     <img src="img/banner3.jpg" data-color="violet" alt="Third Image">
     <div class="carousel-caption caption-left">
       <h1>
            Best place for your Family
          </h1>
     </div>
 </div>
 <div class="item">
     <img src="img/banner4.jpg" data-color="lightgreen" alt="Fourth Image">
     <div class="carousel-caption caption-right">
       <h1><a href="/menu">Checkout Our Menu</a></h1>

     </div>
 </div>
</div>

<!-- Controls -->
<a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
 <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
 <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
 <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
 <span class="sr-only">Next</span>
</a>
</div>

@endsection
