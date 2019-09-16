@extends('layouts.app')
@section('content')
    <h1>Créer une  consultation</h1>
    {{$consultation->patient_id}}
<form  action="{{ route('consultations.create') }}" method="POST">
        @include('consultations.form')
        <div class="form-group">
            <input type="submit" value="Créer" class="btn btn-primary">
        </div>
    </form>

@endsection