@extends('layouts.app')
@section('content')
    <h1>Creer consultation</h1>
    {!! Form::open(['action' => 'ConsultationsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('accompagnant','Nom Accompagnant')}}
            {{Form::text('accompagnant','',['class'=>'form-control','placeholder'=>'Nom Accompagnant'])}}
        </div>
    {!! Form::close() !!}
@endsection