@extends('layouts.app')
@section('content')
    <h1>Patients</h1>
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
    @if(count($patients) > 0)
        @foreach ($patients as $patient)
            <div class="well">
                <h5><a href="/sghl/public/patients/{{$patient->id}}">{{$patient->nom}} {{$patient->prenom}}</a></h5>
            </div>
        @endforeach
        {{$patients->links()}}
    @else
        <p>Aucun patient trouvé</p>
    @endif
@endsection