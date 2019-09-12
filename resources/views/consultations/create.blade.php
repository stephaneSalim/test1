@extends('layouts.app')
@section('content')
    <h1>Creer consultation</h1>
    {{$patient->id}}
    <form  action="consultations" method="POST">
        <label>Accompagnant:</label><input type="text" name="accompagnant" placeholder="Nom et prenom" class="form-control">
        <label>Contact:</label><input type="text" name="contactaccompagnant" placeholder="Contact de l\'accompagnant" class="form-control">
        <label>Reference:</label><input type="text" name="reference" placeholder="venu de la part de?" class="form-control">
        <input type="hidden" name="patient_id" value={{$patient->id}}>
        <input type="submit" value="creer" class="btn btn-primary">
        @csrf
    </form>

@endsection