@extends('layout.app')
@section('content')
<h1>messages</h1>
@if(count($messages) > 0 )
  @foreach ($messages as $message)
    <ul class="list-group">
      <li class="list-group-item active">Name : {{$message->name}}</li>
      <li class="list-group-item">Email : {{$message->email}}</li>
      <li class="list-group-item">Message : {{$message->message}}</li>
    </ul>
  @endforeach
@endif
@endsection
@section('slidebar')
   @parent
   <p>this is slidebar </p>
@endsection
