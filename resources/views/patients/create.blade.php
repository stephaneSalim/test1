@extends('layouts.app')
@section('content')
    <h1>Creer un patient</h1>
    {{ Form::open(['action' => 'PatientsController@store', 'method' => 'POST']) }}
        <div class="form-group">
            {{Form::label('nom', 'Nom')}}
            {{Form::text('nom', '',['class'=>'form-control', 'placeholder'=>'saisissez le nom'])}}
        </div>
        <div class="form-group">
            {{Form::label('prenom', 'Prenom')}}
            {{Form::text('prenom', '',['class'=>'form-control', 'placeholder'=>'saisissez le prenom'])}}
        </div>
        <div class="form-group">
            {{Form::label('age', 'Age')}}
            {{Form::number('age', '',['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('sexe', 'Sexe')}}
            {{Form::text('sexe', '',['class'=>'form-control', 'placeholder'=>'saisissez le sexe'])}}
        </div>
        <div class="form-group">
            {{Form::label('adresse', 'Adress')}}
            {{Form::text('adresse', '',['class'=>'form-control', 'placeholder'=>'saisissez l\'adresse'])}}
        </div>
        <div class="form-group">
            {{Form::label('contact', 'Contact')}}
            {{Form::text('contact', '',['class'=>'form-control', 'placeholder'=>'saisissez le contact'])}}
        </div>
        <div class="form-group">
            {{Form::hidden('onWait','1')}}
        </div>
        {{Form::submit('Enregistrer',['class' => 'btn btn-primary'])}}
    {{ Form::close() }}
@endsection
