@extends('layouts.app')

@section('title','Nouveau Patient')

@section('content')
    <div class="row">
        <div class="col"> <h1>Nouveau Patient </h1></div>
    </div>
    <br>
    <form action="/patients" method="POST">
         @include('patients.form')
         <div class="form-group">
            <button type="submit"class="btn btn-primary">Enregistrer</button>
        </div>
     </form>

@endsection
