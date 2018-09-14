@extends('layouts.app')

@section('title')
	Session
@endsection

@section('content')
	<div class="container">
		<h1>Modifier une Session</h1>
		{{Form::model($session,array('method'=>'patch','route'=>array('session.update',$session->id)))}}
			<table>
				<tr>
					<td><br></td>
					<td><br></td>
				</tr>
				<tr>
					<td>{{Form::label('dateDebut','Date Debut :')}}</td>
					<td>{{Form::date('dateDebut',\Carbon\Carbon::now())}}</td>
				</tr>
				<tr>
					<td><br></td>
					<td><br></td>
				</tr>
				<tr>
					<td>{{Form::label('dateFin','Date Fin :')}}</td>
					<td>{{Form::date('dateFin',\Carbon\Carbon::now())}}</td>
				</tr>
				<tr>
					<td><br></td>
					<td><br></td>
				</tr>
				<tr>
					<td>{{Form::label('idAnimateur','Animateur :')}}</td>
					<td>
						<select name="idAnimateur">
							@foreach($anim as $a)
								<option value="{{$a->id}}">{{$a->nom}} {{$a->prenom}}</option>
							@endforeach
						</select>
					</td>
				</tr>
				<tr>
					<td><br></td>
					<td><br></td>
				</tr>
				<tr>
					<td>{{Form::label('idTheme','Theme :')}}</td>
					<td>
						<select name="idTheme">
							@foreach($thm as $t)
								<option value="{{$t->id}}">{{$t->nom}}</option>
							@endforeach
						</select>
					</td>
				</tr>
				<tr>
					<td><br></td>
					<td><br></td>
				</tr>
				<tr>
					<td>{{Form::label('idStatu','Statut :')}}</td>
					<td>
						<select name="idStatu">
							@foreach($stat as $s)
								<option value="{{$s->id}}">{{$s->nom}}</option>
							@endforeach
						</select>
					</td>
				</tr>
				<tr>
					<td><br></td>
					<td><br></td>
				</tr>
				<tr>
					<td>{{Form::submit('Modifier',array('class'=>'btn btn-success'))}}</td>
				</tr>
			</table>
		{{Form::close()}}
	</div>
@endsection