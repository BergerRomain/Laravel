@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Demande de place</div>
                    
                <div class="panel-body">
                	<form action="{{ url('/sql') }}" method="post">
                		<div>
                			<label>Nom : </label>
                			<input type="text" name="nom">
                		</div>
                		<div>
                			<label>Prenom : </label>
                			<input type="text" name="prenom">
                		</div>
						<div>
                			<label>e-mail : </label>
                			<input type="email" name="email">
                		</div>
                		<div>
                			<label>N°place : </label>
                			<select name="place">
                				<?php
                					for ($i=1; $i <= 100; $i++) 
                					{
                						echo"<option value='place'>$i</option>";
                					}	
                				?>
                			</select>
                		</div>
                		<div>
                			<label>date de debut : </label>
                			<input type="date" name="date_debut">
                		</div>
                		<div>
                			<label>date de fin : </label>
                			<input type="date" name="date_fin">
                		</div>
                		<div class="button">
                			<button type="submit">Valider</button>
                		</div>
                	</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection