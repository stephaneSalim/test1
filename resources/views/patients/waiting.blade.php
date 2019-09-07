@extends('layouts.app')
@section('content')

<h1>Liste d'attente</h1>
@if(count($patients) >= 1)
  @foreach($patients as $patient)
    <div class="well">
      <h5><a href="/sghl/public/patients/{{$patient->id}}">{{$patient->nom}} {{$patient->prenom}}</a></h5>
      <small></small>
    </div>
  @endforeach
@else
  <p>Pas de patients en attente</p>
@endif

@endsection
