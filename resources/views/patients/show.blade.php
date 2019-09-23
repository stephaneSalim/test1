@extends('layouts.app')
@section('title','Details du patient '.  $patient->nom .' '. $patient->prenom)


@section('content')
     <div class="row">
     <div class="col"><a href="{{ route('patients.index') }}" class="btn btn-secondary"><i class="fas fa-angle-left"></i> Retour</a></div>
     <div class="col text-right"><a href="{{ route('consultations.create') }}" class="btn btn-secondary"> <i class="fas fa-diagnoses"></i> Consultation</a></div>
     </div><br>

    <h1>{{$patient->nom}} {{$patient->prenom}}</h1>
    <hr>
    <p> Age: <b>{{$patient->age}}</b> <p>
    <p>Sexe: <b>{{$patient->sexe}}</b></p>
    <p>Adresse: <b>{{$patient->adresse}}</b></p>
    <p>Contact: <b>{{$patient->contact}}</b></p>
    <div class="row">
        <div class="col">
        <a href="{{ route('patients.edit', ['patient' => $patient]) }}" class="btn btn-success"> <i class="fas fa-pencil-alt"></i> Modifier</a>
        </div>
        <div class="col">
            <form action="{{ route('patients.destroy',['patient' => $patient]) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Supprimer</button>

            </form>
        </div>
    </div>
    <hr>
    <table>
        @if(count($consultations) > 0)
        <tr>
            @foreach ($consultations as $consultation)
                <td><a href="{{route('consultations.show',['consultation'=>$consultation])}}">{{$consultation->created_at}}</a></td>
            @endforeach
        </tr>
    </table>
    @else
        <p>Aucune consultation trouvée</p>
    @endif
@endsection
