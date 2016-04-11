<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8" />
	<title>Metronic | User Login 4</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
	<link href=" {{ asset('/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
	<link href=" {{  asset('/global/plugins/simple-line-icons/simple-line-icons.min.css') }} " rel="stylesheet" type="text/css" />
	<link href=" {{  asset('/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<link href=" {{  asset('/global/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css" />
	<link href=" {{  asset('/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<link href=" {{  asset('/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
	<link href=" {{  asset('/global/plugins/select2/css/select2-bootstrap.min.css') }} " rel="stylesheet" type="text/css" />
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN THEME GLOBAL STYLES -->
	<link href=" {{  asset('/global/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
	<link href=" {{  asset('/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- END THEME GLOBAL STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="{{  asset('/pages/css/login-4.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- END PAGE LEVEL STYLES -->
	<!-- BEGIN THEME LAYOUT STYLES -->
	<!-- END THEME LAYOUT STYLES -->


	<link rel="stylesheet" type="text/css" href="{{  asset('/css/bootstrap.min.css') }} ">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href=" {{  asset('/css/owl.carousel.css') }}">
	<link rel="stylesheet" type="text/css" href="{{  asset('/css/main.css') }}">


	<link rel="shortcut icon" href="favicon.ico " /> </head>
<!-- END HEAD -->
<header class="container-fluid">
	<div class="row menu_bar">
		<a href="javascript:void(0);" class="btn-menu"><span class="fa fa-navicon fa-2x"></span></a>
	</div>
	<nav class="row">
		<div class="hidden-xs hidden-sm col-md-3 col-lg-3 nav-left">
			<a href="{{ url('/') }}">
				<img src="{{  asset('/img/logo-menu.png') }}" class="img-responsive center-block">
			</a>
		</div>
		<div class="col-md-6 col-lg-6 text-center nav-center">
			<ul>
				<li><a href="{{ url('/') }}"><img src="{{  asset('/img/home-menu-blanco.png') }}" class="mhome"></a></li>
				<li><a href="{{ url('/conocenos') }}">Conócenos</a></li>
				<li><a href="{{ url('/doctores') }}">Médicos</a></li>
				<li><a href="{{ url('/pacientes') }}">Pacientes</a></li>
			</ul>
		</div>
		<div class="col-lg-3 text-center nav-right">
			<ul>
				<li class="dropdown">
					<a href="{{ url('/auth/login') }}" class="dropbtn">Inicia sesión</a>
					<!--<div class="dropdown-content">
                        <p>Disfruta o forma parte de nuestra red de bienestar</p>
                    </div>-->
				</li>
				<li class="dropdown">
					<a href="{{ url('/auth/register') }}" class="dropbtn">Regístrate</a>
					<!--<div class="dropdown-content">
                         <p>Disfruta o forma parte de nuestra red Medicuus</p>
                     </div>-->
				</li>
			</ul>
		</div>
	</nav>
</header><!--END HEADER-->

<body class=" login">


<!-- BEGIN LOGO -->



<div class="logo">

</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" method="post"  action="{{ url('/password/email') }}" >
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<h3 class="form-title" align="center" ><b>Recupera tu contraseña</b></h3>
		@if (session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
		@endif

		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Whoops!</strong> There were some problems with your input.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

			<h3>Olvidaste tu contraseña?</h3>
			<p> Mete tu email abajo para reestablecer tu contraseña. </p>
			<div class="form-group">
				<div class="input-icon">
					<i class="fa fa-envelope"></i>
					<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" value="{{ old('email') }}" /> </div>
			</div>
			<div class="form-actions">
				<button type="submit" style="background-color:#009DDE" class="btn green pull-right"> Submit </button>
			</div>
		</form>
	</form>
	<!-- END LOGIN FORM -->



	<!-- END REGISTRATION FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->


<!--END FOOTER-->
<!-- END COPYRIGHT -->
<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js {{  asset('') }}"></script>
<script src="../assets/global/plugins/excanvas.min.js {{  asset('') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script type="text/javascript">
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src=" {{  asset('/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script src=" {{  asset('/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src=" {{  asset('/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
<script src=" {{  asset('/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
<script src=" {{  asset('/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src=" {{  asset('/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src=" {{  asset('/global/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
<script src=" {{  asset('/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src=" {{  asset('/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src=" {{  asset('/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
<script src=" {{  asset('/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
<script src=" {{  asset('/global/plugins/backstretch/jquery.backstretch.min.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src=" {{  asset('/global/scripts/app.min.js') }}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{  asset('/pages/scripts/login-4.min.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>
