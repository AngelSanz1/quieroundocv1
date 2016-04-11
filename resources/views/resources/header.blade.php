<link rel="icon" href="{{  asset('/img/quieroundoc.ico') }}"> 
<header class="container-fluid">
     
    <div class="row menu_bar">
        <a href="javascript:void(0);" class="btn-menu"><span class="fa fa-navicon fa-2x"></span></a>
    </div>
    <nav class="row">
        <?php
        $url_actual =$_SERVER["REQUEST_URI"];
        ?>
        <div class="hidden-xs hidden-sm col-md-4 col-lg-4 nav-left">
            <a href="{{ url('/') }}">
                <img src=" {{  asset('/img/logo_blanco.png ') }}" class="img-responsive center-block">
            </a>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 text-center center-block nav-center">
            <ul class="center-block">
                <li><a href="{{ url('/') }}" class="<?= ($url_actual =='/public/'?'activo':''); ?>"><img src="{{  asset('/img/home.png ') }}" class="mhome"></a></li>
                <!--<li><a href="{{ url('/conocenos') }}">Conócenos</a></li>-->
                <li><a href="{{ url('/doctores') }}" class="<?= ($url_actual =='/public/doctores'?'activo':''); ?>">Médicos</a></li>
                <li><a href="{{ url('/pacientes') }}" class="<?= ($url_actual =='/public/pacientes'?'activo':''); ?>">Pacientes</a></li>
            </ul>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 text-center nav-right">
            <div class="col-sm-12 col-md-6 col-lg-6 right-text">
                <span><a href="{{ url('/auth/login') }}" class="<?= ($url_actual =='/public/auth/login'?'activo':''); ?>">INICIA SESIÓN</a></span>
                <!--<div class="dropdown-content">
                    <p>Hello World!</p>
                </div>-->
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 left-text dropdown">
                <span><a href="{{ url('/auth/register') }}" class="<?= ($url_actual =='/public/auth/register'?'activo':''); ?>">REGÍSTRATE</a></span>
                <div class="dropdown-content hidden-xs hidden-sm">
                    <p>FORMA PARTE DE NUESTRA RED DE <span class="text-blue">MÉDICOS</span></p>
                </div>
            </div>
        </div>
    </nav>
</header>