<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="Author" content="GrupoBECM">
	<link rel="canonical" href="http://medicuus.com/">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>QUIEROUNDOC</title>
	<meta name="keywords" content="">
	<meta name="Description" content="">
	<meta property="og:title" content="Quiero un doc"/>
	<meta property="og:image" content=""/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content="Quiero un doc"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="icon" href="{{  asset('/img/quieroundoc.ico') }}"> 

</head>
<body>
	<div class="loader">
		<img src="img/loader.gif">
	</div>
	<div class="content">
		<!--BEGIN HEADER-->
	@include('resources.header')
	<!--END HEADER-->
	<!--BEGIN DIV-->
	<div class="container-fluid" id="banner1">
		<img src="img/azul_responsivo.png" class="img-responsive center-block hidden-md hidden-lg cover-img">
		<img src="img/fondo_cuadro.png" class="img-responsive center-block hidden-xs hidden-sm" id="img-banner1">
	</div><!--END DIV--><!--END DIV-->
	<!--BEGIN DIV-->
	<div class="container-fluid banner2">
		<div class="">
			<p>Donde sea, <span class="text-blue">cuando sea</span></p>
			<img src="img/pleca_color.png" class="img-responsive center-block">
			<p>La experiencia <span>QUIEROUNDOC</span></p>
		</div>
		<div class="button">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<a href="http://quieroundoc.com/public/auth/login">
					<img src="img/boton-usuarios.png" class="img-responsive right-block" alt="">
				</a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<a href="http://quieroundoc.com/public/auth/login">
					<img src="img/boton-medicos.png" class="img-responsive left-block" alt="">
				</a>
			</div>
		</div>
	</div><!--END DIV-->
	<!--BEGIN DIV-->
	<div class="container-fluid parallax-window health-ad" data-parallax="scroll" data-image-src="img/download_app_bg.png">
		<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 slogan">
			<p>Salud en la palma de tu mano</p>
			<p>¡Pide un doc!</p>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 app">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<img src="img/app-store.png" class="img-responsive center-block" alt="">
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<img src="img/google-play.png" class="img-responsive center-block" alt="">
				</div>
			</div>
		</div>
		<!--<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 app">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<img src="img/app-store.png" class="img-responsive center-block" alt="">
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<img src="img/google-play.png" class="img-responsive center-block" alt="">
			</div>
		</div>-->
	</div><!--END DIV-->
	<!--BEGIN DIV-->
	<div class="container-fluid h-work">
		<div class="row title center-block">
			<h2>¿Cómo funcionamos?</h2>
			<hr class="blue_pleca">
		</div>
		<div class="row content center-block">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				<div class="center-block description">
					<div class="localiza center-block">
					</div>
					<hr class="hr1">
					<h4>Localiza</h4>
					<p>A tu médico más cercano y solicítalo</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				<div class="center-block description">
					<div class="confirma center-block">
					</div>
					<hr class="hr2">
					<h4>Confirma</h4>
					<p>El médico que te atenderá enviará una notificación a la brevedad y te daremos el tiempo estimado para consulta</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				<div class="center-block description">
					<div class="recibe center-block">
					</div>
					<hr class="hr3">
					<h4>Recibe</h4>
					<p>Tu médico llegará a brindarte la atención que necesitas</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				<div class="center-block description">
					<div class="evalua center-block">
					</div>
					<hr class="hr4">
					<h4>Evalúa</h4>
					<p>Haznos saber tu experiencia QUIEROUNDOC y comparte tu opinión con otros usuarios</p>
				</div>
			</div>
		</div>
	</div><!--END DIV-->
	<!--BEGIN DIV-->
	<div class="container-fluid owl-carousel banner2-index">
		<div class="item">
			<!--<div class="row col-xs-12 col-sm-6 col-md-6 col-lg-6 image">
				<img src="img/primeros_auxilios_copy.png" class="img-responsive center-block img-size">
			</div>-->
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				<h3>Atención personalizada</h3>
				<img src="img/pleca-blanca.png" class="img-responsive center-block img-size">
				<p class="ques">¿Necesitas servicio de enfermería?</p>
				<p class="answ">Tenemos un equipo especializado en atención y cuidado de cualquier incidente, de forma eficaz y delicada.</p>
			</div>
		</div>
		<div class="item">
			<!--<div class="row col-xs-12 col-sm-6 col-md-6 col-lg-6 image">
				<img src="img/medico_general.png" class="img-responsive center-block img-size">
			</div>-->
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				<h3>Atención personalizada</h3>
				<img src="img/pleca-blanca.png" class="img-responsive center-block img-size">
				<p class="ques">¿Tienes algún síntoma o molestia?</p>
				<p class="answ">Contamos con un selecto grupo de médicos que te diagnosticarán con profesionalismo, seriedad y amabilidad.</p>
			</div>
		</div>
		<div class="item">
			<!--<div class="row col-xs-12 col-sm-6 col-md-6 col-lg-6 image">
				<img src="img/especialista.png" class="img-responsive center-block img-size">
			</div>-->
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				<h3>Atención personalizada</h3>
				<img src="img/pleca-blanca.png" class="img-responsive center-block img-size">
				<p class="ques">¿Padeces de algún síntoma en especifico?</p>
				<p class="answ">Contacta a uno de nuestros medicos especialistas el cual te brindara servicios de primera.</p>
			</div>
		</div>
		<div class="item">
			<!--<div class="row col-xs-12 col-sm-6 col-md-6 col-lg-6 image">
				<img src="img/premiumd.png" class="img-responsive center-block img-size">
			</div>-->
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				<h3>Atención personalizada</h3>
				<img src="img/pleca-blanca.png" class="img-responsive center-block img-size">
				<p class="ques">¿Necesitas de algún servicio personalizado?</p>
				<p class="answ">Adquiere tu servicio premium el cual te brindará servicios de primera calidad de acuerdo a tus necesidades</p>
			</div>
		</div>
	</div><!--END DIV-->
	
	<!--BEGIN DIV-->
	<div class="container-fluid banner2-pag hidden-xs hidden-sm">
		<hr>
		<div class="container text-center" id="custom-pagination-container">
		</div>
	</div>
	<!--END DIV-->
	
	<!--BEGIN FOOTER-->
	@include('resources.footer')
	<!--END FOOTER-->
			
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.backstretch.min.js"></script>
	<script src="js/app.js"></script>
</body>
</html>