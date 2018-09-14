@extends('layouts.app')

@section('title')
	Session
@endsection


@section('content')
	<div class="container">
		<h1>Information de Session</h1>
		<br><br>
		<table>
			<tr>
				<td>Id Session : </td>
				<td>{{$session->id}}</td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td>Date Debut : </td>
				<td>{{$session->dateDebut}}</td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td>Date Fin : </td>
				<td>{{$session->dateFin}}</td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td>Statu : </td>
				<td>@if($session->dateFin > Carbon\Carbon::now())
					<i class="fa fa-2x fa-spinner" style="color:blue;"></i>
				@else
					<i class="fa fa-2x fa-check" style="color:green;"></i>
				@endif
				</td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td>Theme : </td>
				<td>{{$session->idTheme}}</td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td>Animateur : </td>
				<td>{{$session->idAnimateur}}</td>
			</tr>
		</table>
	</div>	
@endsection