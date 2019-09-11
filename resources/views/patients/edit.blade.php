@extends('layouts.app')

@section('title','Edit detail for '. $patient->nom .' '. $patient->prenom)

@section('content')

    <div class="row">
        <div class="col">
            <h1>Modification des infos du patient {{ $patient->nom }} {{ $patient->prenom }} </h1>
        </div>
    </div>
    <form action="/patients/{{ $patient->id }}" method="POST">
            @method('PATCH')
            @include('patients.form')
            <div class="form-group">
                <button type="submit"class="btn btn-primary">Modifier</button>
            </div>
    </form>

@endsection
