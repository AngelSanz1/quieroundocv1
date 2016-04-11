<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="Author" content="GrupoBECM">
	<link rel="canonical" href="http://medicuus.com/">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quiero un doc</title>
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
</head>
<body>
	<!--BEGIN HEADER-->
	@include('resources.header')
	<!--END HEADER-->
	<!--BEGIN DIV-->
	<div class="container-fluid" id="banner1">
		<img src="img/proximamente.png" class="img-responsive center-block" id="img-banner1">
	</div><!--END DIV-->
	@include('resources.footer')

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
			"img/fondo1.png",
			"img/fondo2.png"
  ], {duration: 3000, fade: 750});
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