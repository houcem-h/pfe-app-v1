@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">About this application</div>

                <div class="panel-body text-justify">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    This application is developped by <a href="mailto:hedhoucem@gmail.com">Houcem Hedhly</a> for the IT department of the 
                    High Institute of Technological Educations of Bizerte - Tunisia (<a href="http://www.isetb.rnu.tn/">ISET Bizerte</a>).<br>
                    This application is used to manage the internships of the final year students (PFE).<br>
                    The idea was to migrate an existing application developped with Java J2EE, by my friend 
                    and ex colleague <a href="mailto:ahmed.zaki.jenhani@gmail.com">Ahmed Zeki Jenhani</a>, as a intermdiate
                    before the official app that will be developped by students from the college and that will manage
                     internships of, not only the final year of graduation, but also internships of the first and the second year.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection