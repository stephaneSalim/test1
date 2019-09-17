@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col text-center"> 
            <h1>Edition de la consultation du patient {{ $consultation->patient->nom .' '. $consultation->patient->prenom  }} </h1>
        </div>
    </div>
    <br>
    <form  action="{{ route('consultations.update',['consultation' => $consultation]) }}" method="POST">
        @method('PATCH')
        @include('consultations.form')
        <div class="form-group">
            <input type="submit" value="Créer" class="btn btn-primary btn-block">
        </div>
    </form>

@endsection