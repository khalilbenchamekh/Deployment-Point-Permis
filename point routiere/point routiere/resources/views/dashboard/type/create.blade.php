@extends('layouts.app')

@section('content')
	<div class="container">
		<form>
			<div class="form-group">
				<h1>Nouveau Type</h1>
			{{ Form::open(array('route' => 'types.store')) }}
		    <ul style="list-style-type: none;">
		    	<li>
		    		<br>
		    	</li>
		        <li>
		            {{ Form::label('name', 'Nom:') }}
		            {{ Form::text('nom') }}
		        </li>
		        <li>
		        	<br>
		        </li>
		        <li>
		            {{ Form::submit('Ajouter', array('class' => 'btn btn-success')) }}
		        </li>

		    </ul>
			{{ Form::close() }}	
			</div>
		</form>
	</div>
@endsection