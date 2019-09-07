@extends('layouts.app')
@section('content')
    <h1>Fiches de suivis</h1>
    <div class="">
        <form action="/sghl/public/search" method="GET">
            <div class="input-group">
                <input type="search" name="search" class="form-control">
                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">GO</button>
                </span>
            </div>
        </form>
    </div>
    @if(count($fichesDeSuivi) > 0)
        @foreach ($fichesDeSuivi as $ficheDeSuivi)
            <div class="well">
                <h5><a href="/sghl/public/patients/{{$ficheDeSuivi->id}}">{{$ficheDeSuivi->created_at}} {{$ficheDeSuivi->motif}}</a></h5>
            </div>
        @endforeach
        {{$fichesDeSuivi->links()}}
    @else
        <p>Aucune fiche trouvée</p>
    @endif
@endsection