@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/sections">
            <button type="button" class="btn btn-default" aria-label="Back">Retour</button>
        </a>
        <fieldset>
            <legend>Ajouter une nouvelle section</legend>
            {!! Form::open(['action' => ['SectionsController@store']]) !!}
                <div class="form-group">                
                    {!! Form::label('label', 'Label de section'); !!}
                    {!! Form::text('label','',['class'=>'form-control', 'placeholder'=>'Abréviation de la section']); !!}
                </div>
                <div class="form-group">                
                    {!! Form::label('description', 'Déscription de section'); !!}
                    {!! Form::text('description','',['class'=>'form-control', 'placeholder'=>'Nom complet de la section']); !!}
                </div>
                {!! Form::submit('Enregistrer', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </fieldset>
    </div>
@endsection