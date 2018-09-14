@extends('layouts.app')

@section('title')
	Session
@endsection

@section('content')
	<style type="text/css">
		table thead tr td {
			font-weight: bold;
		}
	</style>
	<div class="container">
		<h1>Toutes les Sessions</h1>
		<p>{{link_to_route('session.create','Créer une nouvelle session')}}</p>
		<table class="table table-hover">
			<thead>
				<tr>
					<td>ID Session</td>
					<td>Date Debut</td>
					<td>Date Fin</td>
					<td>Etat</td>
					<td width="35%">Action</td>
				</tr>
			</thead>
			<tbody>
				@foreach($sessions as $session)
					<tr>
						<td>{{$session->id}}</td>
						<td>{{$session->dateDebut}}</td>
						<td>{{$session->dateFin}}</td>
						<td>
							@if($session->dateFin > Carbon\Carbon::now())
								<i class="fa fa-2x fa-spinner" style="color:blue;"></i>
							@else
								<i class="fa fa-2x fa-check" style="color:green;"></i>
							@endif
						</td>
						<td>
							{{Form::open(array('method' => 'DELETE', 'route' => array('session.destroy', $session->id)))}}
							<button type="submit" class="btn btn-danger">Supprimmer</button>
							{{Form::close()}}
						</td>
						<td>{{link_to_route('session.edit','Modifier',array($session->id),array('class'=>'btn btn-warning'))}}</td>
						<td><button type="button" class="btn btn-primary">Détail</button></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection