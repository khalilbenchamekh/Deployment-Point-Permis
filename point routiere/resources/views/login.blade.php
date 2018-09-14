<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel='stylesheet prefetch' href="{{URL::asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/login-style.css')}}">
    <script src="{{URL::asset('js/jquery-2.2.0.min.js')}}"></script>
	<script src="{{URL::asset('js/jquery-ui.min.js')}}"></script>
  </head>

  <body>
	<div class="login-card">
		<h1>Log-in</h1><br>
		<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
			{{ csrf_field() }}
		  	<input id="email" type="text" placeholder="Username" name="email" value="{{ old('email') }}" autofocus>
			@if ($errors->has('email'))
	            <span class="help-block">
	                <strong>{{ $errors->first('email') }}</strong>
	            </span>
	        @endif
		  	<input id="password" type="password" placeholder="Password" name="password">
		  	@if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
		  	<input type="submit" name="login" class="login login-submit" value="login">
		</form>
	</div>
  </body>
</html>
