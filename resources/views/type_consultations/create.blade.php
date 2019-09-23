@extends('layouts.app')

@section('title','Nouveau type de consultation')

@section('content')
    <div class="row">
        <div class="col"> <h1>Nouveau type de consultation </h1></div>
    </div>
    <br>
    <form action="{{ route('type_consultations.store')}}" method="POST">
         @include('type_consultations.form')
         <div class="form-group">
            <button type="submit"class="btn btn-primary">Enregistrer</button>
        </div>
     </form>

@endsection