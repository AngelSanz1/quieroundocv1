<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Activar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/correo.css') }}">
</head>
<body>
<div class="cotainer-fluid text-center m-active">
    <img src="{{  asset('/img/logo.png') }}" class="center-block active-img">
    <p class="title">¡Hola {USERNAME}!</p>
    <hr>
    <p class="t-1">Para reestablecer tu contraseña da click en el siguiente botón</p>
    <button>Reestablecer<br>Password</button>
    <p class="t-5">En caso de que este link no funcione, por favor copia y pega esta dirección <br>en la barra de dirección de tu navegador:<br> ({SITEPATH}/Confirm.php?email={EMAIL}&key={KEY})</p>
    <hr>
    <a href="https://www.facebook.com/" target="_blank"><img src="{{  asset('/img/facebook_kangarux.jpg') }}" alt="facebook" width="25" height="20" border="0" class="img-sn"/></a>
    <a href="https://twitter.com/" target="_blank"><img src="{{  asset('/img/twitter_kangarux.jpg') }}" alt="twitter" width="25" height="20" border="0" class="img-sn"/></a>
    <a href="http://www.linkedin.com/" target="_blank"><img src="{{  asset('/img/PROMO-GREEN2_09_03.jpg') }}" alt="linkedin" width="25" height="20" border="0" class="img-sn"/></a>
</div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
</script>
</body>