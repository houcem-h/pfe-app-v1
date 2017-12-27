@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Classes</h1>
        <a href="classes/create">
            <button type="button" class="btn btn-primary" aria-label="Add new">Ajouter une classe</button>
        <a><br><br>
        @if(count($classes) > 0)
            <ul class="list-group">
                @foreach($classes as $classs)
                    <li class="list-group-item">
                        <a href="classes/{{$classs->id}}">{{$classs->label}}</a>
                    </li>
                @endforeach
            </ul>
        @else
            <p>Pas de classes disponibles</p>
        @endif        
    </div>
@endsection
