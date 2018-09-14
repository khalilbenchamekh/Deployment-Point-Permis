@extends('layouts.app')

@section('title')
	Stagiaire
@endsection

@section('content')
	<div class="container">
		<div class="wrapper">
			<h1>Nouveau Stagiaire</h1>
			{{Form::open(array('route'=>'stagaire.store'))}}
				<table>
					<tr><br></tr>
					<tr>
						<td>CIN :</td>
						<td>{{Form::text('cin')}}</td>
					</tr>
					<tr>
						<td><br></td>
					</tr>
					<tr>
						<td>Nom :</td>
						<td>{{Form::text('nom')}}</td>
					</tr>
					<tr>
						<td><br></td>
					</tr>
					<tr>
						<td>Prenom :</td>
						<td>{{Form::text('prenom')}}</td>
					</tr>
					<tr>
						<td><br></td>
					</tr>
					<tr>
						<td>Permis :</td>
						<td>{{Form::text('idPermis')}}</td>
					</tr>
					<tr>
						<td><br></td>
					</tr>
					<tr>
						<td>Telephone :</td>
						<td>{{Form::text('tel')}}</td>
					</tr>
					<tr>
						<td><br></td>
					</tr>
					<tr>
						<td>Email :</td>
						<td>{{Form::text('email')}}</td>
					</tr>
					<tr>
						<td><br></td>
					</tr>
					<tr>
						<td>Session :</td>
						<td>
							<select name="idSession">
								@foreach($session as $s)
									<option value="{{$s->id}}">{{$s->id}} - {{$s->dateDebut}} - {{$s->dateFin}}</option>
								@endforeach
							</select>
						</td>
					</tr>
					<tr>
						<td><br></td>
					</tr>
					<tr>
						<td>
							{{Form::submit('Ajouter',array('class'=>'btn btn-success'))}}
						</td>
					</tr>
				</table>
			{{Form::close()}}
		</div>
	</div>
@endsection