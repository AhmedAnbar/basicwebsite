@extends('layouts.app')

@section('title')
Messages Page
@endsection

@section('content')
  <h1>Messages View</h1>
  @if(count($messages) > 0)
    @foreach($messages as $message)
    <ul class="list-group" style="margin-top: .7rem;">
      <li class="list-group-item"><span class="font-weight-bold">Name:</span> {{ $message->name }}</li>
      <li class="list-group-item"><span class="font-weight-bold">E-Mail:</span> {{ $message->email }}</li>
      <li class="list-group-item"><span class="font-weight-bold">Message:</span> {{ $message->message }}</li>
      <li class="list-group-item"><span class="font-weight-bold">Date:</span> {{ $message->created_at }}</li>
    </ul>
    @endforeach
  @endif
@endsection
