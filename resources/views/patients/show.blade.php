@extends('layouts.app')
@section('title','Details du patient '.  $patient->nom .' '. $patient->prenom)


@section('content')
     <div class="row">
         <div class="col"><a href="/patients" class="btn btn-secondary">Retour</a></div>
         <div class="col"><a href="/consultations/create" class="btn btn-secondary pull-right">Consultation</a></div>
     </div><br>

    <h1>{{$patient->nom}} {{$patient->prenom}}</h1>
    <hr>
    <p> Age: <b>{{$patient->age}}</b> <p>
    <p>Sexe: <b>{{$patient->sexe}}</b></p>
    <p>Adresse: <b>{{$patient->adresse}}</b></p>
    <p>Contact: <b>{{$patient->contact}}</b></p>
    <div class="row">
        <div class="col">
             <a href="/patients/{{$patient->id}}/edit" class="btn btn-info">Modifier</a>
        </div>
        <div class="col">
            <form action="/patients/{{ $patient->id }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Supprimer</button>

            </form>
        </div>
    </div>



    <hr>



@endsection
