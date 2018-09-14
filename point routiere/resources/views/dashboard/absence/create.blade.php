@extends('layouts.app')

@section('title')
	Absence
@endsection

@section('content')
	<div class="container">
		<div class="wrapper">
			<h1>Ajouter un Absence</h1>
			<br>
			{{Form::open(array('route'=>'absence.store'))}}
				<table>
					<tr>
						<td>Stagaire :</td>
						<td><select name="idStagaire">
							@foreach($stagaire as $a)
								<option value="{{$a->id}}">{{$a->nom}} {{$a->prenom}}</option>
							@endforeach
						</select></td>
					</tr>
					<tr><td><br></td></tr>
					<tr>
						<td>Module :</td>
						<td>
							<select name="idModule">
								@foreach($module as $m)
									<option value="{{$m->id}}">{{$m->nom}}</option>
								@endforeach
							</select>
						</td>
					</tr>
					<tr><td><br></td></tr>
					<tr>
						<td>Journee :</td>
						<td>
							<select name="idJournee">
								@foreach($journee as $j)
									<option value="{{$j->id}}">{{$j->id}}</option>
								@endforeach
							</select>
						</td>
					</tr>
					<tr><td><br></td></tr>
					<tr>
						<td>{{Form::submit('Ajouter',array('class'=>'btn btn-success'))}}</td>
					</tr>
				</table>
			{{Form::close()}}
		</div>
	</div>
@endsection