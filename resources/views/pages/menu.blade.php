@extends('master')

@section('content')
<div class="wrapper">
  <div class="bg-image">
    <img src="{{ URL::asset('img/menu-header.jpg') }}" alt="">
    <h2>OUR MENU</h2>
  </div>


  <div class="container menu">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h3>Our Speciality</h3>
        <table class="table">
          <tbody>
             @foreach ($foods as $food)
            <tr>
              <td><h5>{{$food->title}}</h5></td>
              <td><h5>{{$food->price}} RS</h5></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>


@endsection
