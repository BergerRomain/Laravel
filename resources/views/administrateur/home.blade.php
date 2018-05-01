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
                                <td></td>
                                <td><a href="{{ url('') }}">Cliquer ici</a></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="{{ url('') }}">Cliquer ici</a></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="{{ url('') }}">Cliquer ici</a></td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
