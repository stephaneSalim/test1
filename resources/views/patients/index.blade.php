@extends('layouts.app')
@section('title','Patients')
@section('content')

    <div class="row">
            <div class="col-md-12 text-right">
                    <a href="/patients/create" class="btn btn-success"> Nouveau patient</a>
            </div>
    </div>
    <br>
    <br>
    <div class="row">
            <div class="col-md-4">
                    <h2>Liste des patients</h2>
            </div>
            <div class="col-md-8">
                    <form>
                        <div class="input-group">
                            <input type="search" name="search" class="form-control" id="search">
                            <button type="submit" class="btn btn-danger">GO</button>
                        </div>
                    </form>
            </div>
    </div>

    <hr>
    @if(count($patients) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">NOM</th>
                <th scope="col">AGE</th>
                <th scope="col">SEXE</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patients as $patient)
                    <tr>
                        <th scope="row">{{$patient->id}}</th>
                        <td><a href="/patients/{{ $patient->id }}"> {{$patient->nom}} {{$patient->prenom}}</a></td>
                        <td>{{$patient->age}}</td>
                        <td>{{$patient->sexe}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$patients->links()}}
    @else
    <div class="row">
        <div class="col-md-12">Aucun patient trouvé</div>
    </div>

    @endif
@endsection
