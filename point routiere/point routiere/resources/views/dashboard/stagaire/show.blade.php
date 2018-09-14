@extends('layouts.app')

@section('title')
	Stagiaire
@endsection

@section('content')
	<div class="container">
		<h1>Information Stagaire</h1>
		<br>
		<br>
		<table>
			<tr>
				<td style="font-weight: bold;">CIN :</td>
				<td>{{$stagaire->cin}}</td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td style="font-weight: bold;">Nom :</td>
				<td>{{$stagaire->nom}}</td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td style="font-weight: bold;">Prenom :</td>
				<td>{{$stagaire->prenom}}</td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td style="font-weight: bold;">Permis :</td>
				<td>{{$stagaire->idPermis}}</td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td style="font-weight: bold;">Telephone :</td>
				<td>{{$stagaire->tel}}</td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td style="font-weight: bold;">Email :</td>
				<td>{{$stagaire->email}}</td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td style="font-weight: bold;">Session :</td>
				<td>{{$stagaire->idSession}}</td>
			</tr>
		</table>
	</div>
@endsection