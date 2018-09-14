@extends('layouts.app')

@section('title')
	Animateur
@endsection

@section('content')
	<div class="container">
		<h1>Information sur un Animateur</h1>
		<br>
		<br>
		<div class="container">
			<table>
				<tr>
					<td style="font-weight: bold;">Nom : </td>
					<td>{{$animateur->nom}}</td>
				</tr>
				<tr><td><br></td></tr>
				<tr>
					<td style="font-weight: bold;">Prenom : </td>
					<td>{{$animateur->prenom}}</td>
				</tr>
				<tr><td><br></td></tr>
				<tr>
					<td style="font-weight: bold;">Numero Inscription : </td>
					<td>{{$animateur->NumeroInscription}}</td>
				</tr>
			</table>
		</div>
	</div>
@endsection