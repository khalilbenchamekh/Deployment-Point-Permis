@extends('layouts.app')

@section('content')
<div class="container">
	<h1>Tout les Types</h1>
	<p>{{link_to_route('types.create','Créer un nouveau type')}}</p>
	<table class="table table-hover">
		<thead>
			<tr>
				<td style="font-weight:bold;width:75%;">Type</td>
				<td style="font-weight:bold;">Action</td>
			</tr>
		</thead>
		<tbody>
			@foreach($types as $type)
				<tr>
					<td>{{$type->nom}}</td>
					<td><button type="button" class="btn btn-danger">Supprimmer</button>
						<button type="button" class="btn btn-warning">Modifier</button>
					</td>
				</tr>
			@endforeach
		</tbody>

	</table>
</div>
@endsection