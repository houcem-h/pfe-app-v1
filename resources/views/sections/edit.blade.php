@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/sections">
            <button type="button" class="btn btn-default" aria-label="Back">Retour</button>
        </a>
        <fieldset>
            <legend>Editer la section <strong>{{$section->label}}</strong></legend>
            {!! Form::open(['action' => ['SectionsController@update',$section->id]]) !!}
                <div class="form-group">                
                    {!! Form::label('label', 'Label de section'); !!}
                    {!! Form::text('label',$section->label,['class'=>'form-control', 'placeholder'=>'Abréviation de la section']); !!}
                </div>
                <div class="form-group">                
                    {!! Form::label('description', 'Déscription de section'); !!}
                    {!! Form::text('description',$section->description,['class'=>'form-control', 'placeholder'=>'Nom complet de la section']); !!}
                </div>
                {{Form::hidden('_method','PUT')}}
                {!! Form::submit('Mettre à jour', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </fieldset>
    </div>
@endsection