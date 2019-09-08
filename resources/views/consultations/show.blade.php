@extends('layouts.app')
@section('content')
    <a href="../consultations" class="btn btn-default">Retour</a>
    <a href="../ficheDeSuivi/create" class="btn btn-default pull-right">Consulter</a>
    <h1>{{$consultation->patient->nom}} {{$consultation->patient->prenom}}</h1>
    <hr>
    <div class="md-col-6">
        <small>Age: <b>{{$consultation->patient->age}}</b> </small><br>
        <small>Sexe: <b>{{$consultation->patient->sexe}}</b></small>
        <br>
        <small>Adresse: <b>{{$consultation->patient->adresse}}</b></small><br>
        <small>Contact: <b>{{$consultation->patient->contact}}</b></small>
    </div>
    <div class="md-col-6 text-right">
        <small>Accompagnant: 
            @if($consultation->accompagnant == NULL)
                <b>N.A</b> 
            @else
                <b>{{$consultation->accompagnant}}</b>
            @endif
        </small><br>
        <small>Contact: 
            @if($consultation->contactaccompagnant == NULL)
                <b>N.A</b> 
            @else
                <b>{{$consultation->contactaccompagnant}}</b>
            @endif
        </small>
        <br>
        <small>Reference: 
            @if($consultation->reference == NULL)
                <b>N.A</b> 
            @else
                <b>{{$consultation->reference}}</b>
            @endif
        </small><br>
    </div>
    <hr>
@endsection 