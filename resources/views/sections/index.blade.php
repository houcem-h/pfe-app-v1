@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Sections</h1>
        <a href="sections/create">
            <button type="button" class="btn btn-primary" aria-label="Add new">Ajouter une section</button>
        <a><br><br>
        @if(count($sections) > 0)
            <ul class="list-group">
                @foreach($sections as $section)
                    <li class="list-group-item">
                        <a href="sections/{{$section->id}}">{{$section->label}}</a>
                        <small class="pull-right">{{$section->description}}</small>
                    </li>
                @endforeach
            </ul>
        @else
            <p>Pas de sections disponibles</p>
        @endif        
    </div>
@endsection
