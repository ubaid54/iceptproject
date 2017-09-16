@extends('layouts.app')
@section('title','Contact')
@section('content')
<h1>Contact</h1>
<div class="row">

<div class="col-md-8 col-lg-8 col-sm-8 col-xs-4">

{!! Form::open(['url' => 'foo/bar']) !!}
    <div class="form-group">
      {{Form::label('name', 'Name')}}
      {{Form::text('name', '',['class' => 'form-control', 'placeholder'=>'Enter your Name'])}}
  </div>
{!! Form::close() !!}
{!! Form::open(['url' => 'foo/bar']) !!}
    <div class="form-group">
      {{Form::label('email', 'E-Mail')}}
      {{Form::email('email', '',['class' => 'form-control', 'placeholder'=>'Enter your E-mail'])}}
  </div>
  <div class="form-group">
    {{Form::label('Message', 'Message')}}
    {{Form::textarea('Message', '',['class' => 'form-control', 'placeholder'=>'Enter your Message'])}}
</div>
{!! Form::close() !!}
{!! Form::open(['url' => 'foo/bar']) !!}
    <div class="form-group">
      {{Form::label('phone', 'Phone')}}
      {{Form::text('phone', '',['class' => 'form-control', 'placeholder'=>'Enter your Phone-number'])}}
      {{Form::submit('Click Me!',['class' =>'btn btn-primary'])}}
  </div>

{!! Form::close() !!}
</div>


<div class="col-md-4 col-lg-4 col-sm-4 col-xs-2"></div>

<div class="row">
  <div class="col-sm-2">
    <i class="col-sm-10 col-xm-22">
    <i class="fa fa-whatsapp" aria-hidden="true"></i>
    <i class="fa fa-phone" aria-hidden="true"></i>
<h2>Phone</h2><p>0321-778-9874</p>
<i class="fa fa-envelope-open-o" aria-hidden="true"></i>
<h2>Email</h2> ubaidkhan@hotmail.com
<i class="fa fa-map-marker" aria-hidden="true"></i>
<h2>Adress</h2><p>House 33 street 67</p>
<i class="fa fa-space-shuttle" aria-hidden="true"></i>
<h2>City</h2><p>Islamabad</p>
<i class="fa fa-bath" aria-hidden="true"></i>

@endsection
