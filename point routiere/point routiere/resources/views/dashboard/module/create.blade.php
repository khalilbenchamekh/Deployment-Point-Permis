@extends('layouts.app')

@section('title')
	Module
@endsection

@section('content')
	<div class="container">
		{{Form::open(array('route'=>'module.store'))}}
			<table>
				<tr><td><br></td></tr>
				<tr>
					<td>Nom : </td>
					<td>{{Form:text('nom')}}</td>
				</tr>
				<tr>
					<td>Duree : </td>
					<td>{{Form:text('duree')}}</td>
				</tr>
				<tr>
					<td>Journee : </td>
					<td>
						<select name="idJournee">
							@foreach($journee as $j)
								<option value="{{$j->id}}">{{$j->id}}</option>
							@endforeach
						</select>
					</td>
				</tr>
				<tr>
					<td>Heure Debut : </td>
					<td>{{Form::time('heureDebut',\Carbon\Carbon::now());}}</td>
				</tr>
			</table>
		{{Form::close()}}
	</div>
@endsection