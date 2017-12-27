@extends('layouts.app')

@section('content')
    <div class="container">
      <a href="/sections">
          <button type="button" class="btn btn-default" aria-label="Back">Retour</button>
      </a>
      <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">{{$section->label}}</h3>
            </div>
            <div class="panel-body">
              {{$section->description}}
            </div>
            <div class="panel-footer">
              <a href="/sections/{{$section->id}}/edit">
                  <button type="button" name="editer" class="btn btn-info">Editer</button>
              </a>              
                {!! Form::open(['action' => ['SectionsController@destroy',$section->id],'method'=>'POST', 'class'=>'pull-right']) !!}                
                    {{Form::hidden('_method','DELETE')}}
                    {!! Form::submit('Supprimer', ['class'=>'btn btn-danger']) !!}
                {!! Form::close() !!}                                
            </div>
      </div>
    </div>
@endsection
