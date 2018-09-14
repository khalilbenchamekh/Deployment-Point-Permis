@extends('layouts.app')

@section('title')
	Stagaire
@endsection

@section('content')
	<div class="container" style="list-style: none;">
		<div class="wrapper">
			<h1>Modifier Stagaire</h1>
			{{Form::model($stagaire,array('method'=>'patch','route'=>array('stagaire.update',$stagaire->id)))}}
				<ul>
					<li>CIN</li>
					<li>{{Form::text('cin')}}</li>
				</ul>
				<ul>
					<li>Nom</li>
					<li>{{Form::text('nom')}}</li>
				</ul>
				<ul>
					<li>Prenom</li>
					<li>{{Form::text('prenom')}}</li>
				</ul>
				<ul>
					<li>Numero Permis</li>
					<li>{{Form::text('idPermis')}}</li>
				</ul>
				<ul>
					<li>Telephone </li>
					<li>{{Form::text('tel')}}</li>
				</ul>
				<ul>
					<li>Email</li>
					<li>{{Form::text('email')}}</li>
				</ul>
				<ul>
					<li>Session</li>
					<li>{{Form::text('idSession')}}</li>
				</ul>
				<ul>
					<li><button type="submit" class="btn btn-success">Modifier</button></li>
				</ul>

			{{Form::close()}}
		</div>
	</div>
@endsection