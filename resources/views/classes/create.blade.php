@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/classes">
            <button type="button" class="btn btn-default" aria-label="Back">Retour</button>
        </a>
        <fieldset>
            <legend>Ajouter une nouvelle classe</legend>
            {!! Form::open(['action' => ['ClassesController@store']]) !!}
                <div class="form-group">                
                    {!! Form::label('label', 'Nom de la classe'); !!}
                    {!! Form::text('label','',['class'=>'form-control', 'placeholder'=>'Nom de la classe']); !!}
                </div>
                <div class="form-group">                
                    {!! Form::label('section', 'Section'); !!}
                    <select class='form-control' name='section'>
                        <option value='select'>Selectionner la section...</option>
                        @foreach ($sections as $section)
                            <option value='{{$section->id}}'>{{$section->label}}</option>
                        @endforeach                    
                    </select>
                </div>
                {!! Form::submit('Enregistrer', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </fieldset>
    </div>
@endsection