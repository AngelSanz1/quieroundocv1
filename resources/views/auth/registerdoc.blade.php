
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
    <title>Contacto</title>
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


    <link rel="shortcut icon" href="{{  asset('/img/logo-menu.png') }}" /> </head>
<!-- END HEAD -->
@include('resources.header')
        <!--END HEADER-->

<body class=" login">


<!-- BEGIN LOGO -->



<div class="logo">
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
        {!! Form::open(['route'=>'doctor.store', 'method'=>'POST'])!!}

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <h3 align="center"><b>Registrate</b></h3>
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
        <p>Ingresa tus datos a continuación: </p>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">escuela</label>
            <div class="input-icon">
                <i class="fa fa-font"></i>
                <input class="form-control placeholder-no-fix" type="text" placeholder="Escribe tu escuela" name="escuela" value="{{ old('escuela') }}" required/> </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Cedula</label>
            <div class="input-icon">
                <i class="fa fa-font"></i>
                <input class="form-control placeholder-no-fix" type="text" placeholder="Escribe tu cedula" name="cedula"  value="{{ old('cedula') }}" required/> </div>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9"></label>
            <div class="input-icon">
                <i class="fa fa-envelope"></i>
                <input class="form-control placeholder-no-fix" type="text" placeholder="Escribe donde ralizaste tu servicio social" name="servicio_social" value="{{ old('servicio_social') }}" required/> </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Cursos</label>
            <div class="input-icon">
                <i class="fa fa-check"></i>
                <input class="form-control placeholder-no-fix" type="text" placeholder="Escribe los cursos que has tomado" name="cursos" value="{{ old('cursos') }}" required/> </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Otros estudios </label>
            <div class="input-icon">
                <i class="fa fa-location-arrow"></i>
                <input class="form-control placeholder-no-fix" type="text" placeholder="Escribe otros estudios que tengas" name="otros" value="{{ old('otros') }}" required/> </div>
        </div>

        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Experiencias </label>
            <div class="input-icon">
                <i class="fa fa-location-arrow"></i>
                <input class="form-control placeholder-no-fix" type="text" placeholder="Escribe tu experiencia" name="experiencia" value="{{ old('experiencia') }}" required/> </div>
        </div>
        <div class="form-group">
            <label>
                <input type="checkbox" name="tnc" required />Estoy de acuerdo con los
                <a href="javascript:;"> términos y condiciones</a> y
                <a href="javascript:;"> las políticas de privacidad. </a>
            </label>
            <div id="register_tnc_error"> </div>
        </div>
        <div class="form-actions">
            <button type="submit" style="background-color:#009DDE" id="register-submit-btn" class="btn green pull-right"> Sign Up </button>
        </div>
    {!! Form::close() !!}





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