@extends('layouts.app')

@section('title')
	Animateur
@endsection

@section('content')
	<div class="container">
		<div class="wrapper">
			<h1>Modifier Animateur</h1>
			{{Form::model($animateur,array('method'=>'patch','route'=>array('animateur.update',$animateur->id)))}}
				<ul>
					<li>Nom</li>
					<li>{{Form::text('nom')}}</li>
				</ul>
				<ul>
					<li>Prenom</li>
					<li>{{Form::text('prenom')}}</li>
				</ul>
				<ul>
					<li>Numero Inscription</li>
					<li>{{Form::text('NumeroInscription')}}</li>
				</ul>
				<ul>
					<li><button type="submit">Modifier</button></li>
				</ul>

			{{Form::close()}}
		</div>
	</div>
@endsection