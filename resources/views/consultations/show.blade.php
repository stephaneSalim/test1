@extends('layouts.app')
@section('content')
    
     <div class="row">
         <div class="col">  <a href="{{ route('consultations.index') }}" class="btn btn-secondary">Retour</a></div>
         <div class="col text-right"> <a href="{{ route('fichesDeSuivi.create') }}" class="btn btn-secondary">Consulter</a></div>
     </div><br>
  
    
    <h1>{{$consultation->patient->nom}} {{$consultation->patient->prenom}}</h1>
    <hr>
    <div class="md-col-6">
        <p>Age: <b>{{$consultation->patient->age}}</b> </p>
        <p>Sexe: <b>{{$consultation->patient->sexe}}</b></p>
        <p>Adresse: <b>{{$consultation->patient->adresse}}</b></p>
        <p>Contact: <b>{{$consultation->patient->contact}}</b></p>
    </div>
    <div class="md-col-6 text-right">
        <p>Accompagnant: 
            @if($consultation->accompagnant == NULL)
                <b>N.A</b> 
            @else
                <b>{{$consultation->accompagnant}}</b>
            @endif
        </p>
        <p>Contact: 
            @if($consultation->contactaccompagnant == NULL)
                <b>N.A</b> 
            @else
                <b>{{$consultation->contactaccompagnant}}</b>
            @endif
        </p>
        <p>Reference: 
            @if($consultation->reference == NULL)
                <b>N.A</b> 
            @else
                <b>{{$consultation->reference}}</b>
            @endif
        </p><br>
    </div>
    <hr>
@endsection 