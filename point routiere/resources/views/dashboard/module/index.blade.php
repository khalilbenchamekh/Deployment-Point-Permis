@extends('layouts.app')

@section('title')
	Module
@endsection

@section('content')
	<style type="text/css">
		table thead tr td {
			font-weight: bold;
		}
	</style>
	<div class="container">
		<h1>Modules</h1>
		<p>{{link_to_route('module.create','Créer un nouveau Module')}}</p>
		<table class="table table-hover">
			<thead>
				<td>Nom</td>
				<td>Durée</td>
				<td>Journée</td>
				<td>heure Debut</td>
				<td>heure Fin</td>
				<td>Action</td>
			</thead>
			<tbody>
				@foreach($module as $m)
					<tr>
						<td>{{$m->nom}}</td>
						<td>{{$m->duree}}</td>
						<td>{{$m->idJournee}}</td>
						<td>{{$m->heureDebut}}</td>
						<td>{{$m->heureFin}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection