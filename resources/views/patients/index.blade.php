@extends('layouts.app')
@section('content')

    <div class="row">
            <div class="col-md-12 text-right">
                    <a href="/patients" class="btn btn-success"> Nouveau patient</a>
            </div>
    </div>
    <br>
    <br>
    <div class="row">
            <div class="col-md-4">
                    <h1>Liste des patients</h1>
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
        <div class="row">
            <div class="col-md-2">ID</div>
            <div class="col-md-2">Nom</div>
            
            <div class="col-md-2">Age</div>
            <div class="col-md-2">Sexe</div>
        </div>
        <hr>
        @foreach ($patients as $patient)
           
        <div class="row">
            <div class="col-md-2">{{$patient->id}}</div>
            <div class="col-md-2"><a href="/patients/{{ $patient->id }}"> {{$patient->nom}} {{$patient->prenom}}</a></div>
            <div class="col-md-2"> {{$patient->age}}</div>
            <div class="col-md-2"> {{$patient->sexe}}</div>
        </div>

           
        @endforeach
        {{$patients->links()}}
    @else
    <div class="row">
        <div class="col-md-12">Aucun patient trouvé</div>
    </div>
      
    @endif
@endsection