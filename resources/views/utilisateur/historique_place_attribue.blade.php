@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Historique des places attribuées</div>
	
                <div class="panel-body">
                	<form action="{{ url('/') }}" method="post">
				<table>
					<tr>
						<th>places attribués</th>
						<th>Date de début</th>
						<th>Date de fin</th>
					</tr>
					<tr>
					<?php 
					     for(){	
						echo"<td>$numplace</td> 
						<td>$dateDebut</td> 
						<td>$dateFin</td>";
					     }
					?>
					</tr>
				</table>
			</from>	
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
