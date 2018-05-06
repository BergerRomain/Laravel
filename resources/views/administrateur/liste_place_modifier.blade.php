@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Liste des places</div>

                <div class="panel-body">
                	<form action="" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                		<div for="place">
                			<label>N°place : </label>
                			<select name="numplace" id="numplace">
                				<?php
                					for ($i = 1; $i <= 100; $i++)
                					{
								echo"<option>$i</option>";
                				  	}
                				?>
                			</select>
                		</div>
                		<div for="date_debut">
                			<label>date de debut : </label>
                			<input type="date" name="dateDebut" id="dateDebut">
                		</div>
                		<div for="date_fin">
                			<label>date de fin : </label>
                			<input type="date" name="dateFin" id="dateFin">
                		</div>
				<a href="{{ url('/administrateur/liste_place_modifier_ok') }}">Modifier</a>
				<a href="{{ url('/administrateur/home') }}">Retour</a>
			</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
