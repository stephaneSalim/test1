@extends('layouts.app')
@section('content')
    <h1>Creer consultation</h1>
    {{$consultation->patient_id}}
    <form  action="/consultations" method="POST">
        @include('consultations.form')
        <div class="form-group">
            <input type="submit" value="creer" class="btn btn-primary">
        </div>
    </form>

@endsection