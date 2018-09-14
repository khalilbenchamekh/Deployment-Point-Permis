@extends('layouts.app')

@section('title')
	Animateur
@endsection

@section('content')
	<div class="container">
		<div class="wrapper">
			<h1>Tous les Animateurs</h1>
			<p>{{link_to_route('animateur.create','Ajouter un Animateur')}}</p>
			<table class="table table-hover">
				<thead>
					<td>ID</td>
					<td>Nom</td>
					<td>Prenom</td>
					<td>Num Inscription</td>
					<td >Action</td>
					<td ></td>
					<td ></td>
				</thead>
				<tbody>
					@foreach($animateur as $a)
						<tr>
							<td>{{$a->id}}</td>
							<td>{{$a->nom}}</td>
							<td>{{$a->prenom}}</td>
							<td>{{$a->NumeroInscription}}</td>
							<td>
								{{Form::open(array('method' => 'DELETE', 'route' => array('animateur.destroy', $a->id)))}}
								<button type="submit" class="btn btn-danger">Supprimmer</button>
								{{Form::close()}}
							</td>
							<td>{{link_to_route('animateur.edit','Modifier',array($a->id),array('class'=>'btn btn-warning'))}}</td>
							<td>{{link_to_route('animateur.show','Detail',array($a->id),array('class'=>'btn btn-primary'))}}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection