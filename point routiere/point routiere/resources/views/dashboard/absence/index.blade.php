@extends('layouts.app')

@section('title')
	Absence
@endsection

@section('content')
	<div class="container">
		<div class="wrapper">
			<h1>Tous les Absences</h1>
			<br>
			<p>{{link_to_route('absence.create','Ajouter un absence')}}</p>
			<br>
			<table class="table table-hover">
				<thead>
					<td>ID</td>
					<td>Stagiaire</td>
					<td>Module</td>
					<td>Journee</td>
				</thead>
				<tbody>
					@foreach($absence as $a)
						<tr>
							<td>{{$a->id}}</td>
							<td>
								{{$stagaire}}
							</td>
							<td>{{$a->idModule}}</td>
							<td>{{$a->idJournee}}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection