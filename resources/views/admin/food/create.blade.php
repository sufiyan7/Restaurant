@extends('admin.master')
@section('content')
<div class="container">
  <div class="padding">


    {!! Form::open(array('route' => 'admin.food.store')) !!}
      {{ Form::label('title','Title:') }}
      {{ Form::text('title',null,array('class'=>'form-control','required'=>'', 'maxlength'=>'255')) }}

      {{ Form::label('price','Price:') }}
      {{ Form::number('price',null,array('class'=>'form-control')) }}

      {{ Form::submit('Create',array('class'=>'btn btn-success btn-lg btn-block', 'style'=> 'margin-top:20px')) }}
    {!! Form::close() !!}
  </div>
</div>
@endsection
