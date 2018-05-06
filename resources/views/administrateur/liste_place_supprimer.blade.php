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
				<div>La suppression a été effectuer avec succès</div>
                		<a href="{{ url('/administrateur/home') }}">Retour</a>
                	</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
