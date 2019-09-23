@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col text-center"> 
            <h1>Fiche de suivi </h1>
        </div>
    </div>
    <br>
    <form  action="{{ route('fichesDeSuivi.store') }}" method="POST">
        @method('POST')
        @include('fichesDeSuivi.form')
        <div class="form-group">
            <input type="submit" value="Créer" class="btn btn-primary btn-block">
        </div>
    </form>

@endsection