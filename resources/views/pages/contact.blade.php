@extends('master')

@section('content')
<!-- Contact with Map - START -->
<div class="container" style="margin-top: 5%;">
  @if(Session::has('success'))
      <div class="alert alert-info">
          <a class="close" data-dismiss="alert">×</a>
          <strong>Heads Up!</strong> {{ session('success') }}
      </div>
  @endif

<div class="page-header">
    <h1>Contact Us</h1>
</div>

<!-- Contact with Map - START -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="well well-sm">
              <legend class="text-center header">Contact us</legend>
              {!! Form::open(array('route' => 'admin.contact.store','method' => 'POST')) !!}
                {{ Form::label('name','Name:') }}
                {{ Form::text('name',null,array('class'=>'form-control','required'=>'', 'maxlength'=>'255')) }}

                {{ Form::label('email','Email:') }}
                {{ Form::text('email',null,array('class'=>'form-control','required'=>'', 'maxlength'=>'255')) }}

                {{ Form::label('phone','Phone:') }}
                {{ Form::number('phone',null,array('class'=>'form-control','required'=>'', 'maxlength'=>'13')) }}

                {{ Form::label('message','Message:') }}
                {{ Form::textarea('message',null,array('class'=>'form-control')) }}

                {{ Form::submit('Send',array('class'=>'btn btn-success btn-lg', 'style'=> 'margin-top:20px')) }}
              {!! Form::close() !!}

            </div>
        </div>
        <div class="col-md-6">
            <div>
                <div class="panel panel-default">
                    <div class="text-center header">Our Location</div>
                    <div class="panel-body text-center">
                        <h4>Address</h4>
                        <div>
                        2217 Washington Blvd<br />
                        Washington DC<br />
                        #(703) 1234 1234<br />
                        service@company.com<br />
                        </div>
                        <hr />
                        <div id="map1" class="map">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<script src="http://maps.google.com/maps/api/js?key=AIzaSyCFaCaB-6jT0l_7lzAvxJIqM3aTF0z-t0Q&sensor=false"></script>

<script type="text/javascript">
    jQuery(function ($) {
        function init_map1() {
            var myLocation = new google.maps.LatLng(38.885516, -77.09327200000001);
            var mapOptions = {
                center: myLocation,
                zoom: 16
            };
            var marker = new google.maps.Marker({
                position: myLocation,
                title: "Property Location"
            });
            var map = new google.maps.Map(document.getElementById("map1"),
                mapOptions);
            marker.setMap(map);
        }
        init_map1();
    });
</script>

<style>
    .map {
        min-width: 300px;
        min-height: 300px;
        width: 100%;
        height: 100%;
    }

    .header {
        background-color: #F5F5F5;
        color: #36A0FF;
        height: 70px;
        font-size: 27px;
        padding: 10px;
    }
</style>
@endsection
