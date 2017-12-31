@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des étudiants</h1>
        @if(count($students) > 0)
            <ul class="list-group">
                @foreach($students as $student)
                    <li class="list-group-item">
                            <small>{{$student->id}}</small>&nbsp;&nbsp;&nbsp;
                        <a href="students/{{$student->id}}">{{$student->firstname}} {{$student->lastname}}</a>
                        <small class="pull-right">{{$student->email}}</small>
                    </li>
                @endforeach
                <div class="text-center">
                    {{$students->links()}}
                </div>                
            </ul>
        @else
            <p>Pas d'étudiants disponibles</p>
        @endif
        <a href="students/create">
            <button type="button" class="btn btn-primary" aria-label="Add new">Ajouter un étudiant</button>
        <a>
    </div>
@endsection
