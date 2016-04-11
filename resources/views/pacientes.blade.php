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
		<img src="img/azul_responsivo_paciente.png" class="img-responsive center-block hidden-lg cover-img">
		<img src="img/azul_hd_paciente.png" class="img-responsive center-block hidden-xs hidden-sm hidden-md" id="img-banner1">
	</div><!--END DIV-->

	<div class="container-fluid h-work">
		<div class="row title center-block">
			<h2>Pide tu Doc</h2>
			<hr class="blue_pleca">
		</div>
	</div>

	<!--BEGIN DIV-->
	<div class="container-fluid pa-banner2">
		<div class="text-center container-fluid info pa-left">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<h2>1</h2>
				<img src="img/1.png" class="center-block img-responsive">
				<p class="dina-text"><span class="text-blue">Regístrate</span> en QUIEROUNDOC.</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<h2>2</h2>
				<img src="img/2.png">
				<p class="dina-text"><span class="text-blue">Utilize nuestra aplicación</span> y solicite un médico. Solo ingrese su número de tarjeta o escanee 
				la misma o haga una recarga en tiendas de autoservicio.</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<h2>3</h2>
				<img src="img/3.png">
				<p class="dina-text">El médico más cercano<span class="text-blue"> confirmará su cita a la brevedad.</span></p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="margin-top:30px;">
				<h2>4</h2>
				<img src="img/4.png">
				<p class="dina-text"><span class="text-blue">Enviaremos su factura </span>al correo que se haya registrado.</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="margin-top:30px;">
				<h2>5</h2>
				<img src="img/5.png">
				<p class="dina-text"><span class="text-blue">Califique nuestro servicio.</span> También puede agendar citas con el médico de su elección.</p>
			</div>
		</div>
		<!--<div class="text-center info">
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-lg-offset-1 text-center pa-left">
				<h2>La dinámica ideal</h2>
				<img src="img/pleca_color.png" class="img-responsive center-block pleca">
				<div class="col-lg-12" style="margin-top:15%;">
					<img src="img/dinamica-1.png" class="dina-img col-lg-2">
					<p class="dina-text col-lg-9"><span class="text-blue">Regístrate</span> en QUIEROUNDOC.</p>
				</div>
				<div class="col-lg-12">
					<img src="img/dinamica-2.png" class="dina-img col-lg-2">
					<p class="dina-text col-lg-9"><span class="text-blue">Utilize nuestra aplicación</span> y solicite un médico. Solo ingrese su número de tarjeta o escanee la misma o haga una recarga en tiendas de autoservicio (OXXO, 7/11, Farmacias del Ahorro, etc.).</p>
				</div>
				<div class="col-lg-12">
					<img src="img/dinamica-4.png" class="dina-img col-lg-2">
					<p class="dina-text col-lg-9">El médico más cercano<span class="text-blue"> confirmará su cita a la brevedad.</span></p>
				</div>
				<div class="col-lg-12">
					<img src="img/dinamica-3.png" class="dina-img col-lg-2">
					<p class="dina-text col-lg-9"><span class="text-blue">Enviaremos su factura </span>al correo que se haya registrado.</p>
				</div>
				<div class="col-lg-12">
					<img src="img/dinamica-5.png" class="dina-img col-lg-2">
					<p class="dina-text col-lg-9"><span class="text-blue">Califique nuestro servicio.</span> También puede agendar citas con el médico de su elección.</p>
				</div>
			</div>-->
			<!--<div class="col-lg-6 pa-right">
				<img src="img/preguntas-frecuentes.png" class="center-block">
				<div class="col-lg-8 col-lg-offset-2 title">
					<h3>Preguntas frecuentes</h3>
				</div>
				<div class="col-lg-8 col-lg-offset-2 description">
					<p class="question text-blue col-lg-12">¿Se puede enviar un médico a otra persona?</p>
					<p class="answer col-lg-12"> Por supuesto, nuestro servicio está disponible no solo para los usuarios refistrados, sino para cualquier persona que le resulte importante, extendiendo su servicio a terceros.</p>

					<p class="question text-blue col-lg-12">¿Cuenta con soporte médico las 24 hrs?</p>
					<p class="answer col-lg-12">QUIEROUNDOC estará disponible siempre que los necesites y con la capacidad de ir a donde tu lo requieras.</p>

					<p class="question text-blue col-lg-12">¿El precio de doctor de noche es el mismo que el de día?</p>
					<p class="answer col-lg-12">No, ya son diferentes tarifas.</p>

					<p class="question text-blue col-lg-12">¿Qué pasa si no enseña mi ubicación correctamente?</p>
					<p class="answer col-lg-12">El médico le llamará para pedirle su ubicación.</p>

					<p class="question text-blue col-lg-12">¿Hay que darle propina?</p>
					<p class="answer col-lg-12">No se acepta propina, el médico ya está pagado por medio de su recarga o cargo a su tarjeta de crédito.</p>

				</div>
			</div>-->
		</div>
		<!--<div class="col-lg-12 btn-med">
			<button class="center-block">Solicita tu primer médico a domicilio</button>
		</div>-->
	</div><!--END DIV-->
	<!--BEGIN DIV-->
	<!--<div class="container-fluid banner2-pag hidden-xs hidden-sm">
		<div class="container text-center" id="custom-pagination-container">
		</div>
	</div>--><!--END DIV-->
	<!--BEGIN DIV-->
	<!--<div class="container-fluid owl-carousel pa-banner2-index">
		<div class="item">
			<section class="col-xs-12 col-sm-12 col-md-3 col-lg-3 text-center left">
				<img src="img/primeros-auxilios.png" class="center-block">
				<h3>Enfermería y <span class="text-black"><br>primeros auxilios</span></h3>
				<img src="img/pleca-blanca.png">
				<p>Porque tu salud y tu bienestar es lo más importante, QUIEROUNDOC ofrece todo tipo de servicios de enfermería las 24 horas del día y todos los días del año a precios muy accesibles.</p>
			</section>
			<section class="col-xs-12 col-sm-12 col-md-6 col-lg-6 center">
				<p class="upper">Horario:</p>
				<p><span class="upper text-black">Tarifa normal:</span> De lunes a viernes de 9:00 a 20:00 y sábados de 9:00 a 14:00</p>
				<p><span class="upper text-black">Tarifa especial:</span> De lunes a viernes de 20:00 a 9:00, sábados de 14:00 a 9:00 y domingos completos (se incrementa un 50% de la tarifa normal).</p>
				<p><span class="upper text-black">Urgencias:</span> Contactando con QUIEROUNDOC en el teléfono indicado, acudirá a su domicilio lo antes posible para resolver su urgencia. Este servicio de emergencia está sujeto a las disponibilidades de QUIEROUNDOC y se aplica la Tarifa Especial</p>
				<section class="text-center">
					<p class="col-lg-6 tarifa">Tarifa normal: <br><span class="text-black font-x">$100.00</span></p>
					<p class="col-lg-6 tarifa">Tarifa especial: <br><span class="text-black font-x">$120.00</span></p>
				</section>
			</section>
			<section class="col-xs-12 col-sm-12 col-md-3 col-lg-3 right">
				<p class="text-black">Toma de constantes (tensión, temperatura, saturación de oxígeno</p>
				<hr>
				<p>Inyecciones intramusculares</p>
				<hr>
				<p class="text-black">Inyecciones intravenosas</p>
				<hr>
				<p>Vacunas, insulinas y heparinas</p>
				<hr>
				<p class="text-black">Cura de heridas (incluyendo quirúrgica)</p>
			</section>
		</div>
		<div class="item">
			<section class="col-xs-12 col-sm-12 col-md-3 col-lg-3 text-center left">
				<img src="img/medicina-general.png" class="center-block">
				<h3>Enfermería y <span class="text-black"><br>primeros auxilios</span></h3>
				<img src="img/pleca-blanca.png">
				<p>Porque tu salud y tu bienestar es lo más importante, QUIEROUNDOC ofrece todo tipo de servicios de enfermería las 24 horas del día y todos los días del año a precios muy accesibles.</p>
			</section>
			<section class="col-xs-12 col-sm-12 col-md-6 col-lg-6 center">
				<p class="upper">Horario:</p>
				<p><span class="upper text-black">Tarifa normal:</span> De lunes a viernes de 9:00 a 20:00 y sábados de 9:00 a 14:00</p>
				<p><span class="upper text-black">Tarifa especial:</span> De lunes a viernes de 20:00 a 9:00, sábados de 14:00 a 9:00 y domingos completos (se incrementa un 50% de la tarifa normal).</p>
				<p><span class="upper text-black">Urgencias:</span> Contactando con QUIEROUNDOC en el teléfono indicado, acudirá a su domicilio lo antes posible para resolver su urgencia. Este servicio de emergencia está sujeto a las disponibilidades de QUIEROUNDOC y se aplica la Tarifa Especial</p>
				<section class="text-center">
					<p class="col-lg-6 tarifa">Tarifa normal: <br><span class="text-black font-x">$100.00</span></p>
					<p class="col-lg-6 tarifa">Tarifa especial: <br><span class="text-black font-x">$120.00</span></p>
				</section>
			</section>
			<section class="col-xs-12 col-sm-12 col-md-3 col-lg-3 right">
				<p class="text-black">Toma de constantes (tensión, temperatura, saturación de oxígeno</p>
				<hr>
				<p>Inyecciones intramusculares</p>
				<hr>
				<p class="text-black">Inyecciones intravenosas</p>
				<hr>
				<p>Vacunas, insulinas y heparinas</p>
				<hr>
				<p class="text-black">Cura de heridas (incluyendo quirúrgica)</p>
			</section>
		</div>
		<div class="item">
			<section class="col-xs-12 col-sm-12 col-md-3 col-lg-3 text-center left">
				<img src="img/especialistas.png" class="center-block">
				<h3>Enfermería y <span class="text-black"><br>primeros auxilios</span></h3>
				<img src="img/pleca-blanca.png">
				<p>Porque tu salud y tu bienestar es lo más importante, QUIEROUNDOC ofrece todo tipo de servicios de enfermería las 24 horas del día y todos los días del año a precios muy accesibles.</p>
			</section>
			<section class="col-xs-12 col-sm-12 col-md-6 col-lg-6 center">
				<p class="upper">Horario:</p>
				<p><span class="upper text-black">Tarifa normal:</span> De lunes a viernes de 9:00 a 20:00 y sábados de 9:00 a 14:00</p>
				<p><span class="upper text-black">Tarifa especial:</span> De lunes a viernes de 20:00 a 9:00, sábados de 14:00 a 9:00 y domingos completos (se incrementa un 50% de la tarifa normal).</p>
				<p><span class="upper text-black">Urgencias:</span> Contactando con QUIEROUNDOC en el teléfono indicado, acudirá a su domicilio lo antes posible para resolver su urgencia. Este servicio de emergencia está sujeto a las disponibilidades de QUIEROUNDOC y se aplica la Tarifa Especial</p>
				<section class="text-center">
					<p class="col-lg-6 tarifa">Tarifa normal: <br><span class="text-black font-x">$100.00</span></p>
					<p class="col-lg-6 tarifa">Tarifa especial: <br><span class="text-black font-x">$120.00</span></p>
				</section>
			</section>
			<section class="col-xs-12 col-sm-12 col-md-3 col-lg-3 right">
				<p class="text-black">Toma de constantes (tensión, temperatura, saturación de oxígeno</p>
				<hr>
				<p>Inyecciones intramusculares</p>
				<hr>
				<p class="text-black">Inyecciones intravenosas</p>
				<hr>
				<p>Vacunas, insulinas y heparinas</p>
				<hr>
				<p class="text-black">Cura de heridas (incluyendo quirúrgica)</p>
			</section>
		</div>
		<div class="item">
			<section class="col-xs-12 col-sm-12 col-md-3 col-lg-3 text-center left">
				<img src="img/premium.png" class="center-block">
				<h3>Enfermería y <span class="text-black"><br>primeros auxilios</span></h3>
				<img src="img/pleca-blanca.png">
				<p>Porque tu salud y tu bienestar es lo más importante, QUIEROUNDOC ofrece todo tipo de servicios de enfermería las 24 horas del día y todos los días del año a precios muy accesibles.</p>
			</section>
			<section class="col-xs-12 col-sm-12 col-md-6 col-lg-6 center">
				<p class="upper">Horario:</p>
				<p><span class="upper text-black">Tarifa normal:</span> De lunes a viernes de 9:00 a 20:00 y sábados de 9:00 a 14:00</p>
				<p><span class="upper text-black">Tarifa especial:</span> De lunes a viernes de 20:00 a 9:00, sábados de 14:00 a 9:00 y domingos completos (se incrementa un 50% de la tarifa normal).</p>
				<p><span class="upper text-black">Urgencias:</span> Contactando con QUIEROUNDOC en el teléfono indicado, acudirá a su domicilio lo antes posible para resolver su urgencia. Este servicio de emergencia está sujeto a las disponibilidades de QUIEROUNDOC y se aplica la Tarifa Especial</p>
				<section class="text-center">
					<p class="col-lg-6 tarifa">Tarifa normal: <br><span class="text-black font-x">$100.00</span></p>
					<p class="col-lg-6 tarifa">Tarifa especial: <br><span class="text-black font-x">$120.00</span></p>
				</section>
			</section>
			<section class="col-xs-12 col-sm-12 col-md-3 col-lg-3 right">
				<p class="text-black">Toma de constantes (tensión, temperatura, saturación de oxígeno</p>
				<hr>
				<p>Inyecciones intramusculares</p>
				<hr>
				<p class="text-black">Inyecciones intravenosas</p>
				<hr>
				<p>Vacunas, insulinas y heparinas</p>
				<hr>
				<p class="text-black">Cura de heridas (incluyendo quirúrgica)</p>
			</section>
		</div>
	</div>--><!--END DIV-->
	<!--BEGIN DIV-->
	<div class="container-fluid owl-carousel doc-banner3 text-center">
		<div class="item"><h1>"¿Tráfico, salas de espera? Con QUIEROUNDOC olvídese de eso y ahorre tiempo"</h1></div>
		<div class="item"><h1>"Tan fácil como pedir un UBER"</h1></div>
		<div class="item"><h1>"Cuenta con médicos en el área donde me encuentro"</h1></div>
		<div class="item"><h1>"Rápido, eficaz y seguro"</h1></div>
		<div class="item"><h1>"Indispensable en una ciudad tan complicada"</h1></div>
		<div class="item"><h1>"Cuenta con especilistas de salud las 24 horas los 7 días de la semana"</h1></div>
		<div class="item"><h1>"Sin efectivo <br>Fácil de pagar"</h1></div>
	</div><!--END DIV-->
	<div class="container-fluid pa-banner2">
		<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 pa-right">
			<img src="img/preguntas-frecuentes.png" class="center-block">
			<div class="col-lg-8 col-lg-offset-2 title">
				<h3>Preguntas frecuentes</h3>
			</div>
			<div class="col-lg-8 col-lg-offset-2 description">
				<p class="question text-blue col-lg-12">¿Se puede enviar un médico a otra persona?</p>
				<p class="answer col-lg-12"> Por supuesto, nuestro servicio está disponible no solo para los usuarios refistrados, sino para cualquier persona que le resulte importante, extendiendo su servicio a terceros.</p>

				<p class="question text-blue col-lg-12">¿Cuenta con soporte médico las 24 hrs?</p>
				<p class="answer col-lg-12">QUIEROUNDOC estará disponible siempre que los necesites y con la capacidad de ir a donde tu lo requieras.</p>

				<p class="question text-blue col-lg-12">¿El precio de doctor de noche es el mismo que el de día?</p>
				<p class="answer col-lg-12">No, ya son diferentes tarifas.</p>

				<p class="question text-blue col-lg-12">¿Qué pasa si no enseña mi ubicación correctamente?</p>
				<p class="answer col-lg-12">El médico le llamará para pedirle su ubicación.</p>

				<p class="question text-blue col-lg-12">¿Hay que darle propina?</p>
				<p class="answer col-lg-12">No, el médico ya está pagado por medio de su recarga o cargo a su tarjeta de crédito.</p>

			</div>
		</div>
	</div>
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
			"img/fondo_estatico_paciente.png"
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

			$(".pa-banner2-index").owlCarousel({
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
						$(".pa-banner2-index").trigger('owl.goTo', i);
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
</body>
</html>