@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/students/{{$student->id}}">
        <button type="button" class="btn btn-default" aria-label="Back">Retour</button>
    </a>
    <fieldset>
        <legend>Editer l'étudiant <strong>{{$student->firstname}} {{$student->lastname}}</strong></legend>
        {!! Form::open(['action' => ['StudentsController@update',$student->id]]) !!}
            <div class="form-group">                
                    {!! Form::label('firstname', 'Prénom'); !!}
                    {!! Form::text('firstname',$student->firstname,['class'=>'form-control', 'placeholder'=>'Prénom']); !!}
            </div>
            <div class="form-group">                
                    {!! Form::label('lastname', 'Nom'); !!}
                    {!! Form::text('lastname',$student->lastname,['class'=>'form-control', 'placeholder'=>'Nom']); !!}
            </div>            
            <div class="form-group">                
                    {!! Form::label('ncin', 'N° CIN'); !!}
                    {!! Form::text('ncin',$student->ncin,['class'=>'form-control', 'placeholder'=>'N° CIN']); !!}
            </div>
            <div class="form-group">                
                    {!! Form::label('email', 'Adresse E-Mail'); !!}
                    {!! Form::text('email',$student->email,['class'=>'form-control', 'placeholder'=>'Adresse E-Mail']); !!}
            </div>
            <div class="form-group">                
                    {!! Form::label('phone', 'Téléphone'); !!}
                    {!! Form::text('phone',$student->phone,['class'=>'form-control', 'placeholder'=>'Téléphone']); !!}
            </div>
            {{Form::hidden('_method','PUT')}}
            {!! Form::submit('Mettre à jour', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </fieldset>
</div>
@endsection
