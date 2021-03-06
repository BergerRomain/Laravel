@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Liste des utilisateurs</div>

                <div class="panel-body">
                	<form action="" method="post">
				<table style="border-collapse: collapse;width:100%;">
					<tr>
						<th style="border: 1px solid black;">Nom</th>
						<th style="border: 1px solid black;">Prenom</th>
						<th style="border: 1px solid black;">Mail</th>
						<th style="border: 1px solid black;">Numero place</th>
					</tr>
				    @foreach($requete as $requete)
					<tr>
						<td style="border: 1px solid black;">{{ $requete->name }}</td> 
						<td style="border: 1px solid black;">{{ $requete->prenom }}</td>
						<td style="border: 1px solid black;">{{ $requete->email }}</td>
						<td style="border: 1px solid black;">{{ $requete->numplace }}</td>
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
