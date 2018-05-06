@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">N° liste d'attente</div>
                    
                <div class="panel-body">
                	<?php
				if($placefile <> NULL)
                			echo"Vous êtes le numéro $placefile dans la liste d'attente";
                		else
                			echo"Vous n'êtes pas dans la liste";
			?>
			<a href="{{ url('/utilisateur/home') }}">Retour</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
