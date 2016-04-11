
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
	<form class="login-form" method="post"  action="{{ url('/auth/register') }}" >
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
			<label class="control-label visible-ie8 visible-ie9">Nombre</label>
			<div class="input-icon">
				<i class="fa fa-font"></i>
				<input class="form-control placeholder-no-fix" type="text" placeholder="Escribe tu nombre(s)" name="nombre" value="{{ old('nombre') }}" required/> </div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Apellido</label>
			<div class="input-icon">
				<i class="fa fa-font"></i>
				<input class="form-control placeholder-no-fix" type="text" placeholder="Escribe tu apellido" name="apellido"  value="{{ old('apellido') }}" required/> </div>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Email</label>
			<div class="input-icon">
				<i class="fa fa-envelope"></i>
				<input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email" value="{{ old('email') }}" required/> </div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Fecha de Nacimiento</label>
			<div class="input-icon">
				<i class="fa fa-check"></i>
				<input class="form-control placeholder-no-fix" type="date" placeholder="Fecha" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required/> </div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Telefono </label>
			<div class="input-icon">
				<i class="fa fa-location-arrow"></i>
				<input class="form-control placeholder-no-fix" type="phone" placeholder="Telefono" name="telefono" required/> </div>
		</div>
		<!-- <div class="form-group">
             <label class="control-label visible-ie8 visible-ie9">Country</label>
             <select name="country" id="country_list" class="select2 form-control">
                 <option value=""></option>
                 <option value="AF">Afghanistan</option>
                 <option value="AL">Albania</option>
                 <option value="DZ">Algeria</option>
                 <option value="AS">American Samoa</option>
                 <option value="AD">Andorra</option>
                 <option value="AO">Angola</option>
                 <option value="AI">Anguilla</option>
                 <option value="AR">Argentina</option>
                 <option value="AM">Armenia</option>
                 <option value="AW">Aruba</option>
                 <option value="AU">Australia</option>
                 <option value="AT">Austria</option>
                 <option value="AZ">Azerbaijan</option>
                 <option value="BS">Bahamas</option>
                 <option value="BH">Bahrain</option>
                 <option value="BD">Bangladesh</option>
                 <option value="BB">Barbados</option>
                 <option value="BY">Belarus</option>
                 <option value="BE">Belgium</option>
                 <option value="BZ">Belize</option>
                 <option value="BJ">Benin</option>
                 <option value="BM">Bermuda</option>
                 <option value="BT">Bhutan</option>
                 <option value="BO">Bolivia</option>
                 <option value="BA">Bosnia and Herzegowina</option>
                 <option value="BW">Botswana</option>
                 <option value="BV">Bouvet Island</option>
                 <option value="BR">Brazil</option>
                 <option value="IO">British Indian Ocean Territory</option>
                 <option value="BN">Brunei Darussalam</option>
                 <option value="BG">Bulgaria</option>
                 <option value="BF">Burkina Faso</option>
                 <option value="BI">Burundi</option>
                 <option value="KH">Cambodia</option>
                 <option value="CM">Cameroon</option>
                 <option value="CA">Canada</option>
                 <option value="CV">Cape Verde</option>
                 <option value="KY">Cayman Islands</option>
                 <option value="CF">Central African Republic</option>
                 <option value="TD">Chad</option>
                 <option value="CL">Chile</option>
                 <option value="CN">China</option>
                 <option value="CX">Christmas Island</option>
                 <option value="CC">Cocos (Keeling) Islands</option>
                 <option value="CO">Colombia</option>
                 <option value="KM">Comoros</option>
                 <option value="CG">Congo</option>
                 <option value="CD">Congo, the Democratic Republic of the</option>
                 <option value="CK">Cook Islands</option>
                 <option value="CR">Costa Rica</option>
                 <option value="CI">Cote d'Ivoire</option>
                 <option value="HR">Croatia (Hrvatska)</option>
                 <option value="CU">Cuba</option>
                 <option value="CY">Cyprus</option>
                 <option value="CZ">Czech Republic</option>
                 <option value="DK">Denmark</option>
                 <option value="DJ">Djibouti</option>
                 <option value="DM">Dominica</option>
                 <option value="DO">Dominican Republic</option>
                 <option value="EC">Ecuador</option>
                 <option value="EG">Egypt</option>
                 <option value="SV">El Salvador</option>
                 <option value="GQ">Equatorial Guinea</option>
                 <option value="ER">Eritrea</option>
                 <option value="EE">Estonia</option>
                 <option value="ET">Ethiopia</option>
                 <option value="FK">Falkland Islands (Malvinas)</option>
                 <option value="FO">Faroe Islands</option>
                 <option value="FJ">Fiji</option>
                 <option value="FI">Finland</option>
                 <option value="FR">France</option>
                 <option value="GF">French Guiana</option>
                 <option value="PF">French Polynesia</option>
                 <option value="TF">French Southern Territories</option>
                 <option value="GA">Gabon</option>
                 <option value="GM">Gambia</option>
                 <option value="GE">Georgia</option>
                 <option value="DE">Germany</option>
                 <option value="GH">Ghana</option>
                 <option value="GI">Gibraltar</option>
                 <option value="GR">Greece</option>
                 <option value="GL">Greenland</option>
                 <option value="GD">Grenada</option>
                 <option value="GP">Guadeloupe</option>
                 <option value="GU">Guam</option>
                 <option value="GT">Guatemala</option>
                 <option value="GN">Guinea</option>
                 <option value="GW">Guinea-Bissau</option>
                 <option value="GY">Guyana</option>
                 <option value="HT">Haiti</option>
                 <option value="HM">Heard and Mc Donald Islands</option>
                 <option value="VA">Holy See (Vatican City State)</option>
                 <option value="HN">Honduras</option>
                 <option value="HK">Hong Kong</option>
                 <option value="HU">Hungary</option>
                 <option value="IS">Iceland</option>
                 <option value="IN">India</option>
                 <option value="ID">Indonesia</option>
                 <option value="IR">Iran (Islamic Republic of)</option>
                 <option value="IQ">Iraq</option>
                 <option value="IE">Ireland</option>
                 <option value="IL">Israel</option>
                 <option value="IT">Italy</option>
                 <option value="JM">Jamaica</option>
                 <option value="JP">Japan</option>
                 <option value="JO">Jordan</option>
                 <option value="KZ">Kazakhstan</option>
                 <option value="KE">Kenya</option>
                 <option value="KI">Kiribati</option>
                 <option value="KP">Korea, Democratic People's Republic of</option>
                 <option value="KR">Korea, Republic of</option>
                 <option value="KW">Kuwait</option>
                 <option value="KG">Kyrgyzstan</option>
                 <option value="LA">Lao People's Democratic Republic</option>
                 <option value="LV">Latvia</option>
                 <option value="LB">Lebanon</option>
                 <option value="LS">Lesotho</option>
                 <option value="LR">Liberia</option>
                 <option value="LY">Libyan Arab Jamahiriya</option>
                 <option value="LI">Liechtenstein</option>
                 <option value="LT">Lithuania</option>
                 <option value="LU">Luxembourg</option>
                 <option value="MO">Macau</option>
                 <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                 <option value="MG">Madagascar</option>
                 <option value="MW">Malawi</option>
                 <option value="MY">Malaysia</option>
                 <option value="MV">Maldives</option>
                 <option value="ML">Mali</option>
                 <option value="MT">Malta</option>
                 <option value="MH">Marshall Islands</option>
                 <option value="MQ">Martinique</option>
                 <option value="MR">Mauritania</option>
                 <option value="MU">Mauritius</option>
                 <option value="YT">Mayotte</option>
                 <option value="MX">Mexico</option>
                 <option value="FM">Micronesia, Federated States of</option>
                 <option value="MD">Moldova, Republic of</option>
                 <option value="MC">Monaco</option>
                 <option value="MN">Mongolia</option>
                 <option value="MS">Montserrat</option>
                 <option value="MA">Morocco</option>
                 <option value="MZ">Mozambique</option>
                 <option value="MM">Myanmar</option>
                 <option value="NA">Namibia</option>
                 <option value="NR">Nauru</option>
                 <option value="NP">Nepal</option>
                 <option value="NL">Netherlands</option>
                 <option value="AN">Netherlands Antilles</option>
                 <option value="NC">New Caledonia</option>
                 <option value="NZ">New Zealand</option>
                 <option value="NI">Nicaragua</option>
                 <option value="NE">Niger</option>
                 <option value="NG">Nigeria</option>
                 <option value="NU">Niue</option>
                 <option value="NF">Norfolk Island</option>
                 <option value="MP">Northern Mariana Islands</option>
                 <option value="NO">Norway</option>
                 <option value="OM">Oman</option>
                 <option value="PK">Pakistan</option>
                 <option value="PW">Palau</option>
                 <option value="PA">Panama</option>
                 <option value="PG">Papua New Guinea</option>
                 <option value="PY">Paraguay</option>
                 <option value="PE">Peru</option>
                 <option value="PH">Philippines</option>
                 <option value="PN">Pitcairn</option>
                 <option value="PL">Poland</option>
                 <option value="PT">Portugal</option>
                 <option value="PR">Puerto Rico</option>
                 <option value="QA">Qatar</option>
                 <option value="RE">Reunion</option>
                 <option value="RO">Romania</option>
                 <option value="RU">Russian Federation</option>
                 <option value="RW">Rwanda</option>
                 <option value="KN">Saint Kitts and Nevis</option>
                 <option value="LC">Saint LUCIA</option>
                 <option value="VC">Saint Vincent and the Grenadines</option>
                 <option value="WS">Samoa</option>
                 <option value="SM">San Marino</option>
                 <option value="ST">Sao Tome and Principe</option>
                 <option value="SA">Saudi Arabia</option>
                 <option value="SN">Senegal</option>
                 <option value="SC">Seychelles</option>
                 <option value="SL">Sierra Leone</option>
                 <option value="SG">Singapore</option>
                 <option value="SK">Slovakia (Slovak Republic)</option>
                 <option value="SI">Slovenia</option>
                 <option value="SB">Solomon Islands</option>
                 <option value="SO">Somalia</option>
                 <option value="ZA">South Africa</option>
                 <option value="GS">South Georgia and the South Sandwich Islands</option>
                 <option value="ES">Spain</option>
                 <option value="LK">Sri Lanka</option>
                 <option value="SH">St. Helena</option>
                 <option value="PM">St. Pierre and Miquelon</option>
                 <option value="SD">Sudan</option>
                 <option value="SR">Suriname</option>
                 <option value="SJ">Svalbard and Jan Mayen Islands</option>
                 <option value="SZ">Swaziland</option>
                 <option value="SE">Sweden</option>
                 <option value="CH">Switzerland</option>
                 <option value="SY">Syrian Arab Republic</option>
                 <option value="TW">Taiwan, Province of China</option>
                 <option value="TJ">Tajikistan</option>
                 <option value="TZ">Tanzania, United Republic of</option>
                 <option value="TH">Thailand</option>
                 <option value="TG">Togo</option>
                 <option value="TK">Tokelau</option>
                 <option value="TO">Tonga</option>
                 <option value="TT">Trinidad and Tobago</option>
                 <option value="TN">Tunisia</option>
                 <option value="TR">Turkey</option>
                 <option value="TM">Turkmenistan</option>
                 <option value="TC">Turks and Caicos Islands</option>
                 <option value="TV">Tuvalu</option>
                 <option value="UG">Uganda</option>
                 <option value="UA">Ukraine</option>
                 <option value="AE">United Arab Emirates</option>
                 <option value="GB">United Kingdom</option>
                 <option value="US">United States</option>
                 <option value="UM">United States Minor Outlying Islands</option>
                 <option value="UY">Uruguay</option>
                 <option value="UZ">Uzbekistan</option>
                 <option value="VU">Vanuatu</option>
                 <option value="VE">Venezuela</option>
                 <option value="VN">Viet Nam</option>
                 <option value="VG">Virgin Islands (British)</option>
                 <option value="VI">Virgin Islands (U.S.)</option>
                 <option value="WF">Wallis and Futuna Islands</option>
                 <option value="EH">Western Sahara</option>
                 <option value="YE">Yemen</option>
                 <option value="ZM">Zambia</option>
                 <option value="ZW">Zimbabwe</option>
             </select>
         </div>-->
		<!--<p> Enter your account details below: </p>-->
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Sexo</label>
			<select name="sexo" placeholder="Selecciona tu sexo" class="select2 form-control">
				<option value="">Selecciona tu sexo</option>
				<option value="M">Masculino</option>
				<option value="F">Femenino</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Contraseña</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password"  id="register_password" placeholder="Ingresa Contraseña" name="password" /> </div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Confirma tu contraseña</label>
			<div class="controls">
				<div class="input-icon">
					<i class="fa fa-check"></i>
					<input class="form-control placeholder-no-fix" type="password"  placeholder="Confirma Contraseña" name="password_confirmation" />
				</div>
			</div>
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
	</form>





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