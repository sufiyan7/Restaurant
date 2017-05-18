@extends('admin.master')
@section('content')
<div class="container">
  <div class="padding">
    <a href="{{ url('/logout') }}" class="btn btn-default logout"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
    <h1>Welcome to our Admin Panel</h1>
    <div class="row" style="margin-top:8%;">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <a href="{{ route('admin.food.index') }}" class="btn btn-primary btn-block">Menu Items</a>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <a href="{{ route('admin.contact.index') }}" class="btn btn-primary btn-block">Contact Messages</a>
      </div>
    </div>

  </div>
</div>
@endsection
