@extends('layouts.app')
@section('content')
    <h1>Creer consultation</h1>
    {!! Form::open(['action' => 'ConsultationsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('accompagnant','Nom Accompagnant')}}
            {{Form::text('accompagnant','',['class'=>'form-control','placeholder'=>'Nom et prenom de l\'accompagnant'])}}
        </div>
        <div class="form-group">
            {{Form::label('contactaccompagnant','Contact')}}
            {{Form::text('contactaccompagnant','',['class'=>'form-control','placeholder'=>'Numero de telephone'])}}
        </div>
        <div class="form-group">
            {{Form::label('reference','Reference')}}
            {{Form::text('reference','',['class'=>'form-control','placeholder'=>'venu de la part de ?'])}}
        </div>
        {{Form::submit('Creer', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection