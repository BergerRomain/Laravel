@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Accueil</div>
                    
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Vous êtes connecté !

                    <table>
                        <caption>Menu</caption>
                            <tr>
                                <td>Demande d'une place : </td>
                                <td><a href="{{ url('/demande_de_place') }}">Cliquer ici</a></td>
                            </tr>
                            <tr>
                                <td>N°place : </td>
                                <td><a href="{{ url('/place') }}">Cliquer ici</a></td>
                            </tr>
                            <tr>
                                <td>N°liste d'attente : </td>
                                <td><a href="{{ url('/liste_attente') }}">Cliquer ici</a></td>
                            </tr>
                            <tr>
                                <td>Historique des places attribuées : </td>
                                <td><a href="{{ url('/historique_place_attribue') }}">Cliquer ici</a></td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
