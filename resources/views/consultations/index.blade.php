@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-md-6">
            <h1>Consultations en attente</h1>
        </div>
        <div class="col-md-6 text-right" >
        <a href="{{ route('patients.index') }}" class="btn btn-primary">Ajouter consultation</a>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nom et prénom</th>
                <th>Spécialité</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if(count($consultations) > 0)
                @foreach ($consultations as $consultation)
                <tr>
                    <td>{{$consultation->id}}</td>
                <td><a href="{{ route('consultations.show', ['consultation' => $consultation ]) }}"> {{ $consultation->patient->nom}} {{$consultation->patient->prenom}}</a></td>
                    <td></td>
                    <td>
                        <a href="{{ route('consultations.show', ['consultation' => $consultation ]) }}" class="btn btn-info">Voir</a>
                        <a href="{{ route('consultations.edit', ['consultation' => $consultation ]) }}" class="btn btn-warning">Modifier</a>

                        <form action="{{ route('consultations.destroy',['consultation' => $consultation]) }}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                {{$consultations->links()}}
            @else
                <p>Aucun patient trouvé</p>
            @endif
        </tbody>
    </table>
  
@endsection