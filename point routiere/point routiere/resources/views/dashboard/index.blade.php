@extends('layouts.app')

@section('title')
	Vue Général
@endsection

@section('content')
	<div class="container">
	    <div class="row">
	        <div class="col-xs-12 col-sm-6 col-lg-4">
	            <div class="box">
	                <div class="icon">
	                    <div class="image"><span class="glyphicon glyphicon-list-alt btn-lg white"></span></div>
	                    <div class="info">
	                        <h3 class="title">Inscription(s)</h3>
	                        <p>
	                            {{App\Inscription::count()}} nouveau inscription(s)
	                        </p>
	                        <div class="more">
	                            <a href="#" title="Title Link"><i class="fa fa-plus"></i> Details
	                            </a>
	                        </div>
	                    </div>
	                </div>
	                <div class="space"></div>
	            </div>
	        </div>
	        <div class="col-xs-12 col-sm-6 col-lg-4">
	            <div class="box">
	                <div class="icon">
	                    <div class="image"><span class="glyphicon glyphicon-envelope btn-lg white"></span></div>
	                    <div class="info">
	                        <h3 class="title">Attestation(s) Validé(s)</h3>
	                        <p>
	                            {{App\Attestation::count()}} Attestation(s) Validé(s)
	                        </p>
	                        <div class="more">
	                            <a href="#" title="Title Link"><i class="fa fa-plus"></i> Details
	                            </a>
	                        </div>
	                    </div>
	                </div>
	                <div class="space"></div>
	            </div>
	        </div>
	        <div class="col-xs-12 col-sm-6 col-lg-4">
	            <div class="box">
	                <div class="icon">
	                    <div class="image"><span class="glyphicon glyphicon-list-alt btn-lg white"></span></div>
	                    <div class="info">
	                        <h3 class="title">Stagaire(s) Validé(s)</h3>
	                        <p>
	                            {{App\Evaluation::where('note','>','10')->count()}} Stagaire(s) Validé(s)
	                        </p>
	                        <div class="more">
	                            <a href="{{route('stagaire.index')}}" title="Title Link"><i class="fa fa-plus"></i> Details
	                            </a>
	                        </div>
	                    </div>
	                </div>
	                <div class="space"></div>
	            </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-xs-12 col-sm-6 col-lg-4">
	            <div class="box">
	                <div class="icon">
	                    <div class="image"><span class="glyphicon glyphicon-list-alt btn-lg white"></span></div>
	                    <div class="info">
	                        <h3 class="title">Session(s) Validé(s)</h3>
	                        <p>
	                            {{App\Session::where('dateFin','<',Carbon\Carbon::now())->count()}} Session(s) Validé(s)
	                        </p>
	                        <div class="more">
	                            <a href="{{route('session.index')}}" title="Title Link"><i class="fa fa-plus"></i> Details
	                            </a>
	                        </div>
	                    </div>
	                </div>
	                <div class="space"></div>
	            </div>
	        </div>
	        <div class="col-xs-12 col-sm-6 col-lg-4">
	            <div class="box">
	                <div class="icon">
	                    <div class="image"><span class="glyphicon glyphicon-list-alt btn-lg white"></span></div>
	                    <div class="info">
	                        <h3 class="title">Session(s) Prochaine(s)</h3>
	                        <p>
	                            {{App\Session::where('dateFin','>=',Carbon\Carbon::now())->count()}} Session(s) Prochaine(s)
	                        </p>
	                        <div class="more">
	                            <a href="{{route('session.index')}}" title="Title Link"><i class="fa fa-plus"></i> Details
	                            </a>
	                        </div>
	                    </div>
	                </div>
	                <div class="space"></div>
	            </div>
	        </div>
	        <div class="col-xs-12 col-sm-6 col-lg-4">
	            <div class="box">
	                <div class="icon">
	                    <div class="image"><span class="glyphicon glyphicon-list-alt btn-lg white"></span></div>
	                    <div class="info">
	                        <h3 class="title">Stagaire(s) echoué(s)</h3>
	                        <p>
	                            {{App\Evaluation::where('note','<','10')->count()}} Stagaire(s) echoué(s)
	                        </p>
	                        <div class="more">
	                            <a href="{{route('stagaire.index')}}" title="Title Link"><i class="fa fa-plus"></i> Details
	                            </a>
	                        </div>
	                    </div>
	                </div>
	                <div class="space"></div>
	            </div>
	        </div>
	    </div>
	</div>
<style>
	.white {
	    color: white;
	}

	.btn-lg {
	    font-size: 38px;
	    line-height: 1.33;
	    border-radius: 6px;
	}

	.box > .icon {
	    text-align: center;
	    position: relative;
	}

	.box > .icon > .image {
	    position: relative;
	    z-index: 2;
	    margin: auto;
	    width: 88px;
	    height: 88px;
	    border: 7px solid white;
	    line-height: 88px;
	    border-radius: 50%;
	    background: #1F77D0;
	    vertical-align: middle;
	}

	.box > .icon:hover > .image {
	    border: 4px solid black;
	}

	.box > .icon > .image > i {
	    font-size: 40px !important;
	    color: #fff !important;
	}

	.box > .icon:hover > .image > i {
	    color: white !important;
	}

	.box > .icon > .info {
	    margin-top: -24px;
	    background: rgba(0, 0, 0, 0.04);
	    border: 1px solid #e0e0e0;
	    padding: 15px 0 10px 0;
	}

	    .box > .icon > .info > h3.title {
	        color: #222;
	        font-weight: 500;
	    }

	    .box > .icon > .info > p {
	        color: #666;
	        line-height: 1.5em;
	        margin: 20px;
	    }

	.box > .icon:hover > .info > h3.title, .box > .icon:hover > .info > p, .box > .icon:hover > .info > .more > a {
	    color: #222;
	}

	.box > .icon > .info > .more a {
	    color: #222;
	    line-height: 12px;
	    text-transform: uppercase;
	    text-decoration: none;
	}

	.box > .icon:hover > .info > .more > a {
	    color: #000;
	    padding: 6px 8px;
	    border-bottom: 4px solid black;
	}

	.box .space {
	    height: 30px;
	}
</style>
@endsection