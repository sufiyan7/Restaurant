@extends('admin.master')

@section('content')
  <div class="container padding">
    <div class="row">
      <div class="col-md-8">
        <h3>Name : {{ $contact->name }}</h3>
        <h3>Email : {{ $contact->email }}</h3>
        <h3>Phone :{{ $contact->phone }}</h3>
        <h3 class="lead">Messages : <br>{{ $contact->message }}</h3>
      </div>

      <div class="col-md-4">
        <div class="well">
          <dl>
            <dt>Recieved At:</dt>
            <dd>{{ date('M j, Y h:i a', strtotime($contact->created_at)) }}</dd>
          </dl>
          <hr>

          <div class="row all-post">
            <div class="col-md-12 col-sm-12">
              {!! Html::linkRoute('admin.contact.index','<< See All Messages',null,array('class'=>'btn btn-default btn-block')) !!}
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


@endsection
