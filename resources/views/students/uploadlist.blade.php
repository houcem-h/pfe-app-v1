@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Inscrire une liste d'étudiants</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="fileToUpload" class="col-md-4 control-label">Fichier</label>

                                <div class="col-md-6">
                                    <input id="fileToUpload" type="file" class="form-control" name="fileToUpload" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="uyear" class="col-md-4 control-label">Année unverstaire</label>

                                <div class="col-md-6">
                                    <input id="uyear" type="text" class="form-control" name="uyear" value="" required>                                    
                                </div>
                            </div>                                                                                

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Enregistrer
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection