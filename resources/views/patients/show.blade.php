@extends('layouts.app')
@section('content')
    <a href="../patients" class="btn btn-default">Retour</a>
    <a href="../patients" class="btn btn-default pull-right">Consultation</a>
    <h1>{{$patient->nom}} {{$patient->prenom}}</h1>
    <hr>
    <small>Age: <b>{{$patient->age}}</b> </small><br>
    <small>Sexe: <b>{{$patient->sexe}}</b></small>
    <br>
    <small>Adresse: <b>{{$patient->adresse}}</b></small><br>
    <small>Contact: <b>{{$patient->contact}}</b></small>
    <hr>
    <a href="../patients/{{$patient->id}}/edit" class="btn btn-default">Modifier</a>

    {{Form::open(['action' => ['PatientsController@destroy', $patient->id], 'method' => 'POST', 'class' => 'pull-right'])}}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Supprimer',['class'=>'btn btn-danger'])}}
    {{ Form::close() }}
@endsection 