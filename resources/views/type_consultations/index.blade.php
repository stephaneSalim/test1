@extends('layouts.app')
@section('title','Type de consultation')
@section('content')

    <div class="row">
            <div class="col-md-12 text-right">
            <a href="{{ route('type_consultations.create') }}" class="btn btn-success"><i class="fas fa-user-plus"></i> Nouveau type</a>
            </div>
    </div>
    <br>
    <br>
    <div class="row">
            <div class="col-md-4">
                   <h2>Rechercher un type</h2>
            </div>
            <div class="col-md-8">
                    <form>
                        <div class="input-group">
                            <input type="search" name="search" class="form-control" id="search">
                            <button type="submit" class="btn btn-danger"><i class="fas fa-search"></i> GO</button>
                        </div>
                    </form>
            </div>
    </div>

    <hr>
    @if(count($type_consultations) > 0)
    <h2>Liste des type de consultations</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">NOM</th>
                <th scope="col">TARIF</th>
                <th scope="col">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($type_consultations as $type_consultation)
                    <tr>
                        <th scope="row">{{$type_consultation->id}}</th>
                        <td>{{$type_consultation->nom}}</td>
                        <td>{{$type_consultation->prix}}</td>
                        <td>
                            <a href="{{ route('type_consultations.edit', ['type_consultation' => $type_consultation ]) }}" class="btn btn-warning">Modifier</a>

                            <form action="{{ route('type_consultations.destroy',['type_consultation' => $type_consultation]) }}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="col">   {{ $type_consultations->links()  }} </div>
        </div>
        
    @else
    <div class="row">
        <div class="col-md-12">Aucun type trouvé</div>
    </div>

    @endif
@endsection
