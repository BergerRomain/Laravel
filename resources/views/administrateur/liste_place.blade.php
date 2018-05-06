@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Liste des places</div>

                <div class="panel-body">
                	<form action="" method="post">
				<table style="border-collapse: collapse;width:100%;">
					<tr>
						<th style="border: 1px solid black;">Numero de la place</th>
						<th style="border: 1px solid black;">Date de debut</th>
						<th style="border: 1px solid black;">Date de fin</th>
						<th style="border: 1px solid black;">Modifier</th>
						<th style="border: 1px solid black;">Supprimer</th>
					</tr>	
				    @foreach($requete as $requete)
					<tr>
						<td style="border: 1px solid black;">{{ $requete->numplace }}</td> 
						<td style="border: 1px solid black;">{{ $requete->dateDebut }}</td>
						<td style="border: 1px solid black;">{{ $requete->dateFin }}</td>
						<td style="border: 1px solid black;"><a href="{{ url('/administrateur/liste_place_modifier') }}">Modifier</a></td>
						<td style="border: 1px solid black;"><a href="{{ url('/administrateur/liste_place_supprimer') }}">Supprimer</a></td>
					</tr>
			 	    @endforeach	
				</table>
				<a href="{{ url('/administrateur/home') }}">Retour</a>
			</from>	
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
