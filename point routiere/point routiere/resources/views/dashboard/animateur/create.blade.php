@extends('layouts.app')

@section('title')
	Animateur
@endsection

@section('content')
	<div class="container">
		<div class="wrapper">
			<h1>Ajouter un Animateur</h1>
			{{Form::open(array('route'=>'animateur.store'))}}
				<table>
					<tr>
						<td><br></td>
					</tr>
					<tr>
						<td>Nom</td>
						<td>{{Form::text('nom')}}</td>
					</tr>
					<tr>
						<td><br></td>
					</tr>
					<tr>
						<td>Prenom</td>
						<td>{{Form::text('prenom')}}</td>
					</tr>
					<tr>
						<td><br></td>
					</tr>
					<tr>
						<td style="padding-right:5px">Numero Inscription</td>
						<td>{{Form::text('NumeroInscription')}}</td>
					</tr>
					<tr>
						<td><br></td>
					</tr>
					<tr>
						<td>{{Form::submit('Ajouter',array('class'=>'btn btn-success'))}}</td>
					</tr>
				</table>
			{{Form::close()}}
		</div>
	</div>
@endsection