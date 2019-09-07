@extends('layouts.app')
@section('content')
    <h1>Consultations en attente</h1>
    @if(count($consultations) > 0)
        @foreach ($consultations as $consultation)
            <div class="well">
                <h5><a href="/sghl/public/consultations/{{$consultation->id}}">{{$consultation->patient->nom}} {{$consultation->patient->prenom}}</a></h5>
            </div>
        @endforeach
        {{$consultations->links()}}
    @else
        <p>Aucun patient trouvé</p>
    @endif
    
@endsection