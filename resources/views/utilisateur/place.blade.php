@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">N°place</div>
                    
                <div class="panel-body">
                	<?php
                		if()
                			echo"Vous êtes à la place numéro $placefile";
                		else
                			echo"Vous n'avez pas de place";
                	?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
