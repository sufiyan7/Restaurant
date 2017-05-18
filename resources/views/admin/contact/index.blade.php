@extends('admin.master')
@section('content')
<div class="container">
  <div class="padding">
    <h2>Messages</h2>
    <a href="{{ URL::to('downloadExcel/xlsx') }}"><button class="btn btn-success">Download Excel xlsx</button></a>
  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <thead>
          <th>#</th>
          <th>Name</th>
          <th>Phone</th>
          <th>Email</th>
          <th></th>
        </thead>

        <tbody>
           @foreach ($contacts as $contact)
             <tr>
               <th>{{$contact->id}}</th>
               <th>{{$contact->name}}</th>
               <td>{{$contact->email}}</td>
               <td>{{$contact->phone}}</td>
               <td>
                 <a href="{{ route('admin.contact.show',$contact->id) }}" class="btn btn-default btn-sm">View Message</a>
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
