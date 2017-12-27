@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/classes">
            <button type="button" class="btn btn-default" aria-label="Back">Retour</button>
        </a>
        <fieldset>
            <legend>Editer la classe <strong>{{$classe->label}}</strong></legend>
            {!! Form::open(['action' => ['ClassesController@update',$classe->id]]) !!}
                <div class="form-group">                
                    {!! Form::label('label', 'Label de section'); !!}
                    {!! Form::text('label',$classe->label,['class'=>'form-control', 'placeholder'=>'Nom de la classe']); !!}
                </div>
                <div class="form-group">                
                    {!! Form::label('section', 'Section'); !!}                    
                </div>           
                {{Form::hidden('_method','PUT')}}
                {!! Form::submit('Mettre à jour', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </fieldset>
    </div>
@endsection