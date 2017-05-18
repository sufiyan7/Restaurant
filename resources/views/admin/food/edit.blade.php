@extends('admin.master')
@section('content')
<div class="container">
  <div class="padding">

    {!! Form::model($food, ['method' => 'PUT','route' => ['admin.food.update', $food->id]]) !!}
      {{ Form::label('title','Title:') }}
      {{ Form::text('title',null,["class" => "form-control input-lg"]) }}

      {{ Form::label('price','Price:') }}
      {{ Form::number('price',null,["class" => "form-control input-lg"]) }}

      {{ Form::submit('Save',array('class'=>'btn btn-success btn-lg btn-block', 'style'=> 'margin-top:20px')) }}
    {!! Form::close() !!}
  </div>
</div>
@endsection
