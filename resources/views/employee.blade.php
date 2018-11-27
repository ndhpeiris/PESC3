@extends('layouts.app2')

@section('content')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

<style>
        .cardappointment{
            border: 0;
        border-radius: 0.1875rem;
        display: inline-block;
        position: relative;
        width: 500px;
        margin-bottom: 30px;
        box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
        padding: 30px;
        }
        .container-appointment{
            justify-content: center !important;
            margin: auto;
            width: 700px;
            padding: 30px;
            display: inline-block;
        }
        
        </style>
        <div class="container">
                <div class = 'row'>
        <div class=" col-lg-4 mr-auto ml-auto">
        <div class = 'row'>
    <div class ="cardappointment">
    {!! Form::open(['action' => 'appoinmentController@store' , 'method' => 'post']) !!}
        <div class = "form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name','',['class' => 'form-control','placeholder' =>'name'])}}
            
            {{Form::label('email','E-mail')}}
            {{Form::text('email','',['class' => 'form-control','placeholder' =>'e-mail'])}}
    
            {{Form::label('venue','Venue')}}
            {{Form::text('venue','',['class' => 'form-control','placeholder' =>'venue'])}}
    
            {{Form::label('date','Date')}}
            {{Form::text('date','',['class' => 'date form-control','placeholder' =>'date'])}}
        
    
            {{Form::label('time','Time')}}
            {{Form::time('time','',['class' => 'form-control','placeholder' =>'time'])}}
        </div>
        {{Form::Submit('Accepted',['class'=>'btn btn-primary'])}}
        {{Form::Submit('Decline',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
        </div>
        </div>
        </div>
@endsection