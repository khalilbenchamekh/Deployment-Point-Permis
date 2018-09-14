<!DOCTYPE html>
<html>
<head>
	<title>Tableau de bord</title>
	<link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/pe-icon-7-stroke.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/bootstrap-dashboard.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/bootstrap.min-icons.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/bootstrap-icons.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/font-awesome.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/font-awesome.min.css')}}">
	
	<script src=" {{ URL::asset('js/jquery-2.2.0.min.js') }} "></script>
	<script src=" {{ URL::asset('js/bootstrap.min.js') }} "></script>
	<script src=" {{ URL::asset('js/bootstrap-checkbox-radio-switch.js')}}"></script>
	<script src=" {{ URL::asset('js/chartist.min.js')}}"></script>
    <!-- Bootstrap Table Core javascript and methods -->
	<script src=" {{ URL::asset('js/bootstrap-dashboard.js')}}"></script>
</head>
<body>
	<div class="wrapper" style="width:100%;">
		<div class="sidebar" data-color="blue" data-image="{{URL::asset('img/sidebar-4.jpg')}}" >
			<div class="sidebar-wrapper">
				<div class="logo">
					<a href="#">
						<img src="{{URL::asset('img/logo.jpg')}}" style="width:100%;height:100%;">
					</a>					
				</div>
				<ul class="nav">
					<li>
						<a href="{{route('dash')}}">
							<i class="pe-7s-id"></i>
							<p>vue générale</p>
						</a>
					</li>
					<li>
						<p style="padding-left:5px;">Personnes</p>
					</li>
					<li>
						<a href="{{Route('animateur.index')}}">
							<i class="pe-7s-note2"></i>
							<p>Animateur</p>
						</a>
					</li>
					<li>
						<a href="{{route('stagaire.index')}}">
							<i class="pe-7s-note2"></i>
							<p>Stagiaire</p>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="pe-7s-note2"></i>
							<p>Utilisateurs</p>
						</a>
					</li>
					<li>
						<p style="padding-left:5px;">Gestion</p>
					</li>
					<li>
						<a href="{{route('absence.index')}}">
							<i class="pe-7s-note2"></i>
							<p>Absence</p>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="pe-7s-note2"></i>
							<p>Journee</p>
						</a>
					</li>
					<li>
						<a href="{{route('module.index')}}">
							<i class="pe-7s-note2"></i>
							<p>Module</p>
						</a>
					</li>
					<li>
						<a href="{{route('session.index')}}">
							<i class="pe-7s-note2"></i>
							<p>Session</p>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="pe-7s-note2"></i>
							<p>Evaluation</p>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="pe-7s-note2"></i>
							<p>Attestation</p>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="pe-7s-note2"></i>
							<p>Status</p>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="pe-7s-note2"></i>
							<p>Theme</p>
						</a>
					</li>
					<li>
						<a href="{{route('types.index')}}">
							<i class="pe-7s-note2"></i>
							<p>Type</p>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="pe-7s-note2"></i>
							<p>Inscription</p>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="pe-7s-note2"></i>
							<p>Registre Stagaire</p>
						</a>
					</li>
				</ul>
			</div>			
		</div>
		<div class="main-panel">
			<nav class="navbar navbar-default navbar-fixed">
	            <div class="container-fluid">
	                <div class="navbar-header" style="width:100%;">
	                    
	                    <div class="collapse navbar-collapse">
	                    <a class="navbar-brand">Tableau de bord - @yield('title')</a>
		                    <ul class="nav navbar-nav navbar-right">
		                        <li class="dropdown">
		                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Liens Utiles
		                                    <b class="caret"></b>
		                              </a>
		                              <ul class="dropdown-menu">
		                                <li><a href="#">Page d'Accueil</a></li>
		                                <li><a href="#">Page Facebook</a></li>
		                              </ul>
		                        </li>
		                        <li>
		                            <button class="btn btn-danger">Déconnexion</button>
		                        </li>
		                    </ul>
	                	</div>
	                </div>
	            </div>
			</nav>

			<!-- main content-->
			@yield('content')

		</div>
	</div>
</body>
</html>