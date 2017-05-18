@extends('admin.master')
@section('content')
<div class="container">
  <div class="padding">
    @if(Session::has('success'))
        <div class="alert alert-info">
            <a class="close" data-dismiss="alert">×</a>
            <strong>Heads Up!</strong> {{ session('success') }}
        </div>
    @endif

  <a href="{{ route('admin.food.create') }}" class="btn btn-primary btn-md">Add Menu Item</a>

  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <thead>
          <th>#</th>
          <th>Title</th>
          <th>Price</th>
          <th></th>
          <th></th>
        </thead>

        <tbody>
           @foreach ($foods as $food)
             <tr>
               <th>{{$food->id}}</th>
               <td>{{$food->title}}</td>
               <td>{{$food->price}}</td>
               <td>
                 <a href="{{ route('admin.food.edit',$food->id) }}" class="btn btn-default btn-sm">Edit</a>
               </td>
               <td>
                 {!! Form::open(['route' => ['admin.food.destroy',$food->id],'method' => 'DELETE']) !!}
                 {!! Form::submit('Delete',['class' => 'btn btn-danger btn-sm']) !!}
               </td>
             </tr>
           @endforeach
        </tbody>
      </table>

      </div>

    </div>
  </div>
</div>
@endsection
