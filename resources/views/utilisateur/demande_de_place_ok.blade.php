@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Demande de place</div>
                    
                <div class="panel-body">
                	<form action="" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
				<div>Votre demande de place à été validée</div>
                		<a href="{{ url('/utilisateur/home') }}">Retour</a>
                	</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
