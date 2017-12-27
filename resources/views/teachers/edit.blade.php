@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/teachers/{{$teacher->id}}">
        <button type="button" class="btn btn-default" aria-label="Back">Retour</button>
    </a>
    <fieldset>
        <legend>Editer l'enseignant <strong>{{$teacher->firstname}} {{$teacher->lastname}}</strong></legend>
        {!! Form::open(['action' => ['TeachersController@update',$teacher->id]]) !!}
            <div class="form-group">                
                    {!! Form::label('firstname', 'Prénom'); !!}
                    {!! Form::text('firstname',$teacher->firstname,['class'=>'form-control', 'placeholder'=>'Prénom']); !!}
            </div>
            <div class="form-group">                
                    {!! Form::label('lastname', 'Nom'); !!}
                    {!! Form::text('lastname',$teacher->lastname,['class'=>'form-control', 'placeholder'=>'Nom']); !!}
            </div>
            <div class="form-group">                
                    {!! Form::label('ncin', 'N° CIN'); !!}
                    {!! Form::text('ncin',$teacher->ncin,['class'=>'form-control', 'placeholder'=>'N° CIN']); !!}
            </div>            
            <div class="form-group">                
                    {!! Form::label('email', 'Adresse E-Mail'); !!}
                    {!! Form::text('email',$teacher->email,['class'=>'form-control', 'placeholder'=>'Adresse E-Mail']); !!}
            </div>
            <div class="form-group">                
                    {!! Form::label('phone', 'Téléphone'); !!}
                    {!! Form::text('phone',$teacher->phone,['class'=>'form-control', 'placeholder'=>'Téléphone']); !!}
            </div>
            <div class="form-group">                
                    {!! Form::label('userPrivilege', 'Role'); !!}
                    <select class='form-control' name='userPrivilege'>                                             
                        <option value='1' @if($teacher->userPrivilege === 1) selected @endif>Enseignant</option>
                        <option value='2' @if($teacher->userPrivilege === 2) selected @endif>Administrateur</option>                                                                    
                    </select>                    
            </div>
            {{Form::hidden('_method','PUT')}}
            {!! Form::submit('Mettre à jour', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </fieldset>
</div>
@endsection
