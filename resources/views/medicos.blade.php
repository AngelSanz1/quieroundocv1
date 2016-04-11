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
<!--BEGIN HEADER-->
@include('resources.header')
<!--END HEADER-->
<!--BEGIN DIV-->
<div class="container-fluid" id="banner1">
	<img src="img/azul_responsivo_medico.png" class="img-responsive center-block hidden-md hidden-lg cover-img">
	<img src="img/azul_hd_medicos.png" class="img-responsive center-block hidden-xs hidden-sm" id="img-banner1">
	<button class="btn-banner center-block hidden-xs hidden-sm" onclick="window.location.href='http://quieroundoc.com/public/auth/register'">Aplica ahora</button>
</div><!--END DIV-->
<!--BEGIN DIV-->
<div class="container-fluid doc-banner2">
	<img src="img/icono-doctor.png" class="img-responsive center-block">
	<p>Equipo de expertos</p>
	<hr>
	<p>QUIEROUNDOC es una plataforma de vanguardia que te permitirá ampliar tu campo laboral acomplándose a tus necesidades</p>
</div><!--END DIV-->
<!--BEGIN DIV-->
<div class="container-fluid owl-carousel doc-banner3 text-center">
	<div class="item"><h1>"Trabajo en mi tiempo libre"</h1></div>
	<div class="item"><h1>"Es una forma ideal para trabajar en fines de semana"</h1></div>
	<div class="item"><h1>"Tengo una red de pacientes las 24 horas los 7 días de la semana"</h1></div>
	<div class="item"><h1>"He incrementado mis pacientes"</h1></div>
	<div class="item"><h1>"Mi trabajo se acopla a mi horario"</h1></div>
</div><!--END DIV-->
<!--BEGIN DIV-->
<div class="container-fluid doc-banner4">
	<h2>Beneficios</h2>
	<hr>
	<div class="row content center-block">
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-edit">
			<div class="center-block description">
				<div class="paciente center-block">
				</div>
				<h4>Pacientes</h4>
				<p>Incrementa tu cartera de pacientes.</p>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-edit">
			<div class="center-block description">
				<div class="tiempo center-block">
				</div>
				<h4>Tiempo</h4>
				<p>Trabaja cuando quieras y donde quieras.</p>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-edit">
			<div class="center-block description">
				<div class="ingresos center-block">
				</div>
				<h4>Ingresos</h4>
				<p>Aumenta tus ingresos sin la necesidad de un consultorio.</p>
			</div>
		</div>
	</div>
	<div class="text-center static">
		<h3>¡EMPIEZA A GANAR DINERO!</h3>
		<p>Ingreso por consulta</p>
		<span class="text-blue">$450</span>
	</div>
</div><!--END DIV-->
<!--BEGIN DIV-->
<div class="container-fluid parallax-window doc-health-ad" data-parallax="scroll" data-image-src="img/banner_web.png">
	<p class="slogan">Únete a Medicuus</p>
	<button onclick="window.location.href='http://quieroundoc.com/public/auth/register'">Aplica ahora</button>
</div><!--END DIV-->
<!--BEGIN FOOTER-->
@include('resources.footer')
<!--END FOOTER-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		var windowHeight =$(window).innerHeight();
		document.getElementById("banner1").style.height = windowHeight + 'px';
		document.getElementById("img-banner1").style.height = windowHeight + 'px';
	});
</script>
<script type="text/javascript">
	$("#banner1").backstretch([
		"img/fondo_estatico_doc.png"
	], {duration: 3000, fade: 750});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		var customContainer = $('#custom-pagination-container');
		var customContainerArray = new Array();
		var OWLinit = false;
		var text_s = ["Primeros auxilios", "Medicina general", "Especialistas", "Premium"];
		var pag_cond = $(window).width();
		var condition = false;

		$(".banner2-index").owlCarousel({
			navigation : false, // Show next and prev buttons
			autoPlay: true,
			slideSpeed : 300,
			pagination: condition,
			paginationSpeed : 400,
			singleItem:true,
			afterInit: afterOWLinit, // do some work after OWL init
			afterAction: afterAction
		});
		function afterAction() {
			if (OWLinit) updateClass(this.owl.currentItem);
			//console.info('afterAction ' + this.owl.currentItem);
		}
		function afterOWLinit() {
			// Possible to move the pagination to a new div?
			// https://github.com/OwlFonk/OwlCarousel/issues/196
			// var that = this;
			// that.owlControls.prependTo(customContainer);
			// that.owlControls.append(customContainer);
			//============================================
			$.each(this.owl.userItems, function (i) {
				var a = $('<div class="owl-page"><span class="bg-img-'+i+'"><p>'+text_s[i]+'</p></span></div>');
				customContainerArray.push(a);
				// bind click event for new pgination item
				a.bind('click', function (event) {
					event.preventDefault();
					this.goto = i;
					updateClass(this.goto); // add/remove .active class
					//console.log(this.goto);
					$(".banner2-index").trigger('owl.goTo', i);
				});
				customContainer.append(a);
			});
			updateClass(this.owl.currentItem);
			OWLinit = true;
		}

		function updateClass(elem) {
			$.each(customContainerArray, function () {
				this.removeClass('active');
			});
			customContainerArray[elem].addClass('active');
		}
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {

		$(".doc-banner3").owlCarousel({
			navigation : false, // Show next and prev buttons
			autoPlay: true,
			slideSpeed : 300,
			lazyLoad: true,
			pagination: true,
			paginationSpeed : 400,
			singleItem:true,
			// "singleItem:true" is a shortcut for:
			// items : 1,
			// itemsDesktop : false,
			// itemsDesktopSmall : false,
			// itemsTablet: false,
			// itemsMobile : false
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(main);
	var counter = true;
	function main() {
		$('.menu_bar').click(function(){
			//$('nav').toggle();
			if(counter) {
				$('nav').animate({
					left: '0'
				});
				counter = false;
			}else {
				$('nav').animate({
					left: '-100%'
				});
				counter = true;
			}
		});
	}
</script>
</body>
</html>