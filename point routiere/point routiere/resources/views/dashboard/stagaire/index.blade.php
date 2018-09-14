@extends('layouts.app')

@section('title')
	Stagiaire
@endsection

@section('content')
	<style type="text/css">
		table thead tr td {
			font-weight: bold;
		}
	</style>

	<div class="container">
		<h1>Tous les Stagiaires</h1>
		<p>{{link_to_route('stagaire.create','Ajouter un stagiaire')}}</p>
		<p>
			<table class="table table-hover">
				<thead>
					<td>ID</td>
					<td>CIN</td>
					<td>Nom</td>
					<td>Prenom</td>
					<td>Telephone</td>
					<td>email</td>
					<td width="20%">Action</td>
				</thead>
				<tbody>
					@foreach($stagaire as $stg)
						<tr>
							<td>{{$stg->id}}</td>
							<td>{{$stg->cin}}</td>
							<td>{{$stg->nom}}</td>
							<td>{{$stg->prenom}}</td>
							<td>{{$stg->tel}}</td>
							<td>{{$stg->email}}</td>
							<td>
							{{Form::open(array('method' => 'DELETE', 'route' => array('stagaire.destroy', $stg->id)))}}
							<button type="submit" class="btn btn-danger">Supprimmer</button>
							{{Form::close()}}
							</td>
							<td>{{link_to_route('stagaire.edit','Modifier',array($stg->id),array('class'=>'btn btn-warning'))}}</td>
							<td>{{link_to_route('stagaire.show','Detail',array($stg->id),array('class'=>'btn btn-primary'))}}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</p>
	</div>
@endsection