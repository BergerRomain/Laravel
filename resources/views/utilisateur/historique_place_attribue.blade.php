@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Historique des places attribuées</div>

                <div class="panel-body">
                	<form action="" method="post">
				<table style="border-collapse: collapse;width:100%;">
					<tr>
						<th style="border: 1px solid black;">places attribués</th>
						<th style="border: 1px solid black;">Date de début</th>
						<th style="border: 1px solid black;">Date de fin</th>
					</tr>
					
				    @foreach($requete as $requete)
					<tr>
						<td style="border: 1px solid black;">{{ $requete->numplace }}</td> 
						<td style="border: 1px solid black;">{{ $requete->dateDebut }}</td>
						<td style="border: 1px solid black;">{{ $requete->dateFin }}</td>
					</tr>
			 	    @endforeach	
				</table>
				<a href="{{ url('/utilisateur/home') }}">Retour</a>
			</from>	
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
