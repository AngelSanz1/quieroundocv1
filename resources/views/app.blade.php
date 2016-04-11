<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	{!!  Html::style('css/app.css') !!}

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<link rel="stylesheet" type="text/css" href="{{  asset('/css/bootstrap.min.css') }} ">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href=" {{  asset('/css/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{  asset('/css/main.css') }}">
<header class="container-fluid" >
	<div class="row nav1" >
			<span class="hidden-lg">
				<i class="fa fa-bars fa-2x"></i>
			</span>

		@if (Auth::guest())
		<ul class="hidden-xs" style="">
			<li ><a  href="{{ url('/auth/login') }}"><b>INICIA SESIN</b></a></li>
			<li ><a style="	background-color: #35353F;padding: 16px 15px;" href="{{ url('/auth/register') }}"><b>REGISTRATE</b></a></li>
			<li style="margin-top:-2px;" ><a href="{{ url('/') }}"><img src="{{  asset('/img/home-blanco.png') }} " style="margin-top:-10px;"></a></li>
		</ul>
		@else
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->nombre }} <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
				</ul>
			</li>
			@endif
			</ul>
	</div>
</header><!--END HEADER-->


	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	@yield('scripts')
</body>
</html>
