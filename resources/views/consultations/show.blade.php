@extends('layouts.app')
@section('content')
    
     <div class="row">
         <div class="col">  <a href="{{ route('consultations.index') }}" class="btn btn-secondary">Retour</a></div>
         @if ($consultation->onWait == 1)
         <form action="/consultations/{{$consultation->id}}" method="POST">
            @method('PATCH')
            @csrf
            <input type="hidden" name="onWait" value="0">
            <input type="submit" value="Consulter" class="btn btn-primary btn-block">
         </form>
         @endif
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

    <!-- Affichage fiche de suivi -->
    @if ($consultation->onWait == 0)
    <div>
        <label>Tension:</label>{{$consultation->ficheDeSuivi->tension}}
    </div>
    <div>
        <label>Temperature:</label>{{$consultation->ficheDeSuivi->temperature}}
    </div>
    <div>
        <label>Poids:</label>{{$consultation->ficheDeSuivi->poids}}
    </div>
    <div>
        <label>Motif:</label>{{$consultation->ficheDeSuivi->motif}}
    </div>
    <div>
        <label>Symptomes:</label>{{$consultation->ficheDeSuivi->symptomes}}
    </div>
    <div>
        <label>Description:</label>{{$consultation->ficheDeSuivi->description}}
    </div>
    <div>
        <label>Antecedents:</label>{{$consultation->ficheDeSuivi->antecedents}}
    </div>
    <div>
        <label>Diagnostic:</label>{{$consultation->ficheDeSuivi->diagnostic}}
    </div>
    <div>
        <label>Prescription:</label>{{$consultation->ficheDeSuivi->prescription}}
    </div>
    @endif
@endsection 