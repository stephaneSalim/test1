@extends('layouts.app')
@section('content')
    <h1>Modifier le patient {{$patient->nom}} {{$patient->prenom}}</h1>
    {{ Form::open(['action' => ['PatientsController@update', $patient->id], 'method' => 'PUT']) }}
        <div class="form-group">
            {{Form::label('nom', 'Nom')}}
            {{Form::text('nom', $patient->nom,['class'=>'form-control', 'placeholder'=>'saisissez le nom'])}}
        </div>
        <div class="form-group">
            {{Form::label('prenom', 'Prenom')}}
            {{Form::text('prenom', $patient->prenom,['class'=>'form-control', 'placeholder'=>'saisissez le prenom'])}}
        </div>
        <div class="form-group">
            {{Form::label('age', 'Age')}}
            {{Form::number('age', $patient->age,['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('sexe', 'Sexe')}}
            {{Form::text('sexe', $patient->sexe,['class'=>'form-control', 'placeholder'=>'saisissez le sexe'])}}
        </div>
        <div class="form-group">
            {{Form::label('adresse', 'Adresse')}}
            {{Form::text('adresse', $patient->adresse,['class'=>'form-control', 'placeholder'=>'saisissez l\'adresse'])}}
        </div>
        <div class="form-group">
            {{Form::label('contact', 'Contact')}}
            {{Form::text('contact', $patient->contact,['class'=>'form-control', 'placeholder'=>'saisissez le contact'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Enregistrer',['class' => 'btn btn-primary'])}}
    {{ Form::close() }}
@endsection