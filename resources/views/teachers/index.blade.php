@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des enseignants</h1> 
        <a href="teachers/create">
            <button type="button" class="btn btn-primary" aria-label="Add new">Ajouter un enseignant</button>
        <a>
        &nbsp;&nbsp;&nbsp;
        <a href="/uploadteachers">
            <button type="button" class="btn btn-info" aria-label="Add new">Inscrire plusieurs enseignants</button>
        <a>
        <br><br>
        @if(count($teachers) > 0)
            <ul class="list-group">
                @foreach($teachers as $teacher)
                    <li class="list-group-item">
                        <a href="teachers/{{$teacher->id}}">{{$teacher->firstname}} {{$teacher->lastname}}</a>                        
                        <small class="pull-right">{{$teacher->email}}</small>
                    </li>
                @endforeach
                {{$teachers->links()}}
            </ul>
        @else
            <p>Pas d'enseignants disponibles</p>
        @endif              
    </div>
@endsection