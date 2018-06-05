@extends('layouts.app')
@section('title')
Contact Page
@endsection
@section('content')
<h1>Contact View</h1>

{!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
      {{ Form::label('name', 'Name') }}
      {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Your Name']) }}
    </div>
    <div class="form-group">
      {{ Form::label('email', 'E-Mail Address') }}
      {{ Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter E-Mail']) }}
    </div>
    <div class="form-group">
      {{ Form::label('message', 'Message') }}
      {{ Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Message']) }}
      <br>
      {{ Form::submit('submit', ['class' => 'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
@endsection
