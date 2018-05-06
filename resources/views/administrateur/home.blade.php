@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Accueil Administrateur</div>
                    
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Vous êtes connecté !

                    <table>
                        <caption>Menu : </caption>
                            <tr>
                                <td>Liste d'attentes :</td>
                                <td><a href="{{ url('administrateur/liste_dattentes') }}">Cliquer ici</a></td>
                            </tr>
                            <tr>
                                <td>Liste places :</td>
                                <td><a href="{{ url('administrateur/liste_place') }}">Cliquer ici</a></td>
                            </tr>
                            <tr>
                                <td>Liste des utilisateurs :</td>
                                <td><a href="{{ url('administrateur/liste_utilisateurs') }}">Cliquer ici</a></td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
