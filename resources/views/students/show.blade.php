@extends('layouts.app')

@section('content')
    <div class="container">
      <a href="/students">
          <button type="button" class="btn btn-default" aria-label="Back">Retour</button>
      </a>
      <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">{{$student->firstname}} {{$student->lastname}}</h3>
            </div>
            <div class="panel-body">
                <ul>                
                <li>N° CIN : <strong>{{$student->ncin}}</strong></li>
                <li>Email : <strong>{{$student->email}}</strong></li>
                <li>Téléphone : <strong>{{$student->phone}}</strong></li>
                <ul>
            </div>
            <div class="panel-footer">
              <a href="/students/{{$student->id}}/edit">
                  <button type="button" name="editer" class="btn btn-info">Editer</button>
              </a>              
                {!! Form::open(['action' => ['StudentsController@destroy',$student->id],'method'=>'POST', 'class'=>'pull-right']) !!}                
                    {{Form::hidden('_method','DELETE')}}
                    {!! Form::submit('Supprimer', ['class'=>'btn btn-danger']) !!}
                {!! Form::close() !!}                                
            </div>
      </div>
    </div>
@endsection