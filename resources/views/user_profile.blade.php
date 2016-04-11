

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
	<title>Metronic | User Profile 2</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<link href="{{ asset('/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}../assets  " rel="stylesheet" type="text/css" />

	<link href="{{ asset('/pages/css/profile-2.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- END PAGE LEVEL STYLES -->
	<!-- BEGIN THEME LAYOUT STYLES -->
	<link href="{{ asset('/layouts/layout/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/layouts/layout/css/themes/darkblue.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
	<link href="{{ asset('/layouts/layout/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- END THEME LAYOUT STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />

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
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN THEME GLOBAL STYLES -->
	<link href=" {{  asset('/global/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
	<link href=" {{  asset('/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />



	<link rel="stylesheet" type="text/css" href="{{  asset('/css/bootstrap.min.css') }} ">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href=" {{  asset('/css/owl.carousel.css') }}">
	<link rel="stylesheet" type="text/css" href="{{  asset('/css/main.css') }}">


	<link rel="shortcut icon" href="favicon.ico " />

</head>
<!-- END HEAD -->
@if (!(Auth::guest()))
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white" style="background-color:white;">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner ">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.html">
				<img src="{{  asset('/layouts/layout/img/logo.png') }}" alt="logo" class="logo-default" /> </a>
			<div class="menu-toggler sidebar-toggler"> </div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				<!-- BEGIN NOTIFICATION DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="icon-bell"></i>
						<span class="badge badge-default"> 7 </span>
					</a>
					<ul class="dropdown-menu">
						<li class="external">
							<h3>
								<span class="bold">12 pending</span> notifications</h3>
							<a href="page_user_profile_1.html">view all</a>
						</li>
						<li>
							<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
								<li>
									<a href="javascript:;">
										<span class="time">just now</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-success">
                                                        <i class="fa fa-plus"></i>
                                                    </span> New user registered. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<span class="time">3 mins</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-danger">
                                                        <i class="fa fa-bolt"></i>
                                                    </span> Server #12 overloaded. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<span class="time">10 mins</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-warning">
                                                        <i class="fa fa-bell-o"></i>
                                                    </span> Server #2 not responding. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<span class="time">14 hrs</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-info">
                                                        <i class="fa fa-bullhorn"></i>
                                                    </span> Application error. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<span class="time">2 days</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-danger">
                                                        <i class="fa fa-bolt"></i>
                                                    </span> Database overloaded 68%. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<span class="time">3 days</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-danger">
                                                        <i class="fa fa-bolt"></i>
                                                    </span> A user IP blocked. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<span class="time">4 days</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-warning">
                                                        <i class="fa fa-bell-o"></i>
                                                    </span> Storage Server #4 not responding dfdfdfd. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<span class="time">5 days</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-info">
                                                        <i class="fa fa-bullhorn"></i>
                                                    </span> System Error. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<span class="time">9 days</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-danger">
                                                        <i class="fa fa-bolt"></i>
                                                    </span> Storage server failed. </span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<!-- END NOTIFICATION DROPDOWN -->
				<!-- BEGIN INBOX DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="icon-envelope-open"></i>
						<span class="badge badge-default"> 4 </span>
					</a>
					<ul class="dropdown-menu">
						<li class="external">
							<h3>You have
								<span class="bold">7 New</span> Messages</h3>
							<a href="app_inbox.html">view all</a>
						</li>
						<li>
							<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
								<li>
									<a href="#">
                                                <span class="photo">
                                                    <img src="../assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                    <span class="from"> Lisa Wong </span>
                                                    <span class="time">Just Now </span>
                                                </span>
										<span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
									</a>
								</li>
								<li>
									<a href="#">
                                                <span class="photo">
                                                    <img src="../assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                    <span class="from"> Richard Doe </span>
                                                    <span class="time">16 mins </span>
                                                </span>
										<span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
									</a>
								</li>
								<li>
									<a href="#">
                                                <span class="photo">
                                                    <img src="../assets/layouts/layout3/img/avatar1.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                    <span class="from"> Bob Nilson </span>
                                                    <span class="time">2 hrs </span>
                                                </span>
										<span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
									</a>
								</li>
								<li>
									<a href="#">
                                                <span class="photo">
                                                    <img src="../assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                    <span class="from"> Lisa Wong </span>
                                                    <span class="time">40 mins </span>
                                                </span>
										<span class="message"> Vivamus sed auctor 40% nibh congue nibh... </span>
									</a>
								</li>
								<li>
									<a href="#">
                                                <span class="photo">
                                                    <img src="../assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                    <span class="from"> Richard Doe </span>
                                                    <span class="time">46 mins </span>
                                                </span>
										<span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<!-- END INBOX DROPDOWN -->
				<!-- BEGIN TODO DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="icon-calendar"></i>
						<span class="badge badge-default"> 3 </span>
					</a>
					<ul class="dropdown-menu extended tasks">
						<li class="external">
							<h3>You have
								<span class="bold">12 pending</span> tasks</h3>
							<a href="app_todo.html">view all</a>
						</li>
						<li>
							<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
								<li>
									<a href="javascript:;">
                                                <span class="task">
                                                    <span class="desc">New release v1.2 </span>
                                                    <span class="percent">30%</span>
                                                </span>
                                                <span class="progress">
                                                    <span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </span>
                                                </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
                                                <span class="task">
                                                    <span class="desc">Application deployment</span>
                                                    <span class="percent">65%</span>
                                                </span>
                                                <span class="progress">
                                                    <span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">65% Complete</span>
                                                    </span>
                                                </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
                                                <span class="task">
                                                    <span class="desc">Mobile app release</span>
                                                    <span class="percent">98%</span>
                                                </span>
                                                <span class="progress">
                                                    <span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">98% Complete</span>
                                                    </span>
                                                </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
                                                <span class="task">
                                                    <span class="desc">Database migration</span>
                                                    <span class="percent">10%</span>
                                                </span>
                                                <span class="progress">
                                                    <span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">10% Complete</span>
                                                    </span>
                                                </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
                                                <span class="task">
                                                    <span class="desc">Web server upgrade</span>
                                                    <span class="percent">58%</span>
                                                </span>
                                                <span class="progress">
                                                    <span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">58% Complete</span>
                                                    </span>
                                                </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
                                                <span class="task">
                                                    <span class="desc">Mobile development</span>
                                                    <span class="percent">85%</span>
                                                </span>
                                                <span class="progress">
                                                    <span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">85% Complete</span>
                                                    </span>
                                                </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
                                                <span class="task">
                                                    <span class="desc">New UI release</span>
                                                    <span class="percent">38%</span>
                                                </span>
                                                <span class="progress progress-striped">
                                                    <span style="width: 38%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">38% Complete</span>
                                                    </span>
                                                </span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<!-- END TODO DROPDOWN -->
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img alt="" class="img-circle" src="{{  asset('/layouts/layout/img/avatar3_small.jpg') }}" />
						<span class="username username-hide-on-mobile"> {{ Auth::user()->nombre }}  </span>
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a href="page_user_profile_1.html">
								<i class="icon-user"></i> My Profile </a>
						</li>
						<li>
							<a href="app_calendar.html">
								<i class="icon-calendar"></i> My Calendar </a>
						</li>
						<li>
							<a href="app_inbox.html">
								<i class="icon-envelope-open"></i> My Inbox
								<span class="badge badge-danger"> 3 </span>
							</a>
						</li>
						<li>
							<a href="app_todo.html">
								<i class="icon-rocket"></i> My Tasks
								<span class="badge badge-success"> 7 </span>
							</a>
						</li>
						<li class="divider"> </li>
						<li>
							<a href="page_user_lock_1.html">
								<i class="icon-lock"></i> Lock Screen </a>
						</li>
						<li>
							<a href="{{ url('/auth/logout') }}">
								<i class="icon-key"></i> Log Out </a>
						</li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
				<!-- BEGIN QUICK SIDEBAR TOGGLER -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-quick-sidebar-toggler">
					<a href="" class="dropdown-toggle">
						<i class="icon-logout"></i>
					</a>
				</li>
				<!-- END QUICK SIDEBAR TOGGLER -->
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->


			<!-- END PAGE BAR -->
			<!-- BEGIN PAGE TITLE-->
			<h3 class="page-title"> User Profile 2
				<small>user profile sample</small>
			</h3>
			<!-- END PAGE TITLE-->
			<!-- END PAGE HEADER-->
			<div class="profile">
				<div class="tabbable-line tabbable-full-width">
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="#tab_1_1" data-toggle="tab"> Overview </a>
						</li>
						<li>
							<a href="#tab_1_3" data-toggle="tab"> Account </a>
						</li>
						<li>
							<a href="#tab_1_6" data-toggle="tab"> Help </a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab_1_1">
							<div class="row">
								<div class="col-md-3">
									<ul class="list-unstyled profile-nav">
										<li>

											<img src="{{  asset('/pages/media/profile/people19.png') }}" class="img-responsive pic-bordered" alt="" />
											<a href="javascript:;" class="profile-edit"> edit </a>
										</li>
										<li>
											<a href="javascript:;"> Projects </a>
										</li>
										<li>
											<a href="javascript:;"> Messages
												<span> 3 </span>
											</a>
										</li>
										<li>
											<a href="javascript:;"> Friends </a>
										</li>
										<li>
											<a href="javascript:;"> Settings </a>
										</li>
									</ul>
								</div>
								<div class="col-md-9">
									<div class="row">
										<div class="col-md-8 profile-info">



											<h1 class="font-green sbold uppercase">{{ Auth::user()->nombre }} {{ Auth::user()->apellido }} </h1>

											<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam tincidunt erat volutpat laoreet dolore magna aliquam tincidunt erat volutpat.
											</p>
											<p>
												<a href="javascript:;"> www.mywebsite.com </a>
											</p>
											<ul class="list-inline">
												<li>
													<i class="fa fa-map-marker"></i> Spain </li>
												<li>
													<i class="fa fa-calendar"></i>{{ Auth::user()->fecha_nacimiento }} </li>
												<li>
													<i class="fa fa-briefcase"></i> {{ Auth::user()->telefono }} </li>
												<li>
													<i class="fa fa-envelope"></i> {{ Auth::user()->email }} </li>
												<li>
													<i class="fa fa-heart"></i> BASE Jumping </li>
											</ul>
										</div>
										@endif
										<!--end col-md-8-->
										<div class="col-md-4">
											<div class="portlet sale-summary">
												<div class="portlet-title">
													<div class="caption font-red sbold"> Sales Summary </div>
													<div class="tools">
														<a class="reload" href="javascript:;"> </a>
													</div>
												</div>
												<div class="portlet-body">
													<ul class="list-unstyled">
														<li>
                                                                    <span class="sale-info"> TODAY SOLD
                                                                        <i class="fa fa-img-up"></i>
                                                                    </span>
															<span class="sale-num"> 23 </span>
														</li>
														<li>
                                                                    <span class="sale-info"> WEEKLY SALES
                                                                        <i class="fa fa-img-down"></i>
                                                                    </span>
															<span class="sale-num"> 87 </span>
														</li>
														<li>
															<span class="sale-info"> TOTAL SOLD </span>
															<span class="sale-num"> 2377 </span>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<!--end col-md-4-->
									</div>
									<!--end row-->
									<div class="tabbable-line tabbable-custom-profile">
										<ul class="nav nav-tabs">
											<li class="active">
												<a href="#tab_1_11" data-toggle="tab"> Latest Customers </a>
											</li>
											<li>
												<a href="#tab_1_22" data-toggle="tab"> Feeds </a>
											</li>
										</ul>
										<div class="tab-content">
											<div class="tab-pane active" id="tab_1_11">
												<div class="portlet-body">
													<table class="table table-striped table-bordered table-advance table-hover">
														<thead>
														<tr>
															<th>
																<i class="fa fa-briefcase"></i> Company </th>
															<th class="hidden-xs">
																<i class="fa fa-question"></i> Descrition </th>
															<th>
																<i class="fa fa-bookmark"></i> Amount </th>
															<th> </th>
														</tr>
														</thead>
														<tbody>
														<tr>
															<td>
																<a href="javascript:;"> Pixel Ltd </a>
															</td>
															<td class="hidden-xs"> Server hardware purchase </td>
															<td> 52560.10$
																<span class="label label-success label-sm"> Paid </span>
															</td>
															<td>
																<a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="javascript:;"> Smart House </a>
															</td>
															<td class="hidden-xs"> Office furniture purchase </td>
															<td> 5760.00$
																<span class="label label-warning label-sm"> Pending </span>
															</td>
															<td>
																<a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="javascript:;"> FoodMaster Ltd </a>
															</td>
															<td class="hidden-xs"> Company Anual Dinner Catering </td>
															<td> 12400.00$
																<span class="label label-success label-sm"> Paid </span>
															</td>
															<td>
																<a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="javascript:;"> WaterPure Ltd </a>
															</td>
															<td class="hidden-xs"> Payment for Jan 2013 </td>
															<td> 610.50$
																<span class="label label-danger label-sm"> Overdue </span>
															</td>
															<td>
																<a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="javascript:;"> Pixel Ltd </a>
															</td>
															<td class="hidden-xs"> Server hardware purchase </td>
															<td> 52560.10$
																<span class="label label-success label-sm"> Paid </span>
															</td>
															<td>
																<a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="javascript:;"> Smart House </a>
															</td>
															<td class="hidden-xs"> Office furniture purchase </td>
															<td> 5760.00$
																<span class="label label-warning label-sm"> Pending </span>
															</td>
															<td>
																<a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="javascript:;"> FoodMaster Ltd </a>
															</td>
															<td class="hidden-xs"> Company Anual Dinner Catering </td>
															<td> 12400.00$
																<span class="label label-success label-sm"> Paid </span>
															</td>
															<td>
																<a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
															</td>
														</tr>
														</tbody>
													</table>
												</div>
											</div>
											<!--tab-pane-->
											<div class="tab-pane" id="tab_1_22">
												<div class="tab-pane active" id="tab_1_1_1">
													<div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">
														<ul class="feeds">
															<li>
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-success">
																				<i class="fa fa-bell-o"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc"> You have 4 pending tasks.
                                                                                        <span class="label label-danger label-sm"> Take action
                                                                                            <i class="fa fa-share"></i>
                                                                                        </span>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date"> Just now </div>
																</div>
															</li>
															<li>
																<a href="javascript:;">
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-success">
																					<i class="fa fa-bell-o"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc"> New version v1.4 just lunched! </div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date"> 20 mins </div>
																	</div>
																</a>
															</li>
															<li>
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-danger">
																				<i class="fa fa-bolt"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc"> Database server #12 overloaded. Please fix the issue. </div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date"> 24 mins </div>
																</div>
															</li>
															<li>
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-info">
																				<i class="fa fa-bullhorn"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc"> New order received. Please take care of it. </div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date"> 30 mins </div>
																</div>
															</li>
															<li>
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-success">
																				<i class="fa fa-bullhorn"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc"> New order received. Please take care of it. </div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date"> 40 mins </div>
																</div>
															</li>
															<li>
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-warning">
																				<i class="fa fa-plus"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc"> New user registered. </div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date"> 1.5 hours </div>
																</div>
															</li>
															<li>
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-success">
																				<i class="fa fa-bell-o"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc"> Web server hardware needs to be upgraded.
																				<span class="label label-inverse label-sm"> Overdue </span>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date"> 2 hours </div>
																</div>
															</li>
															<li>
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-default">
																				<i class="fa fa-bullhorn"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc"> New order received. Please take care of it. </div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date"> 3 hours </div>
																</div>
															</li>
															<li>
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-warning">
																				<i class="fa fa-bullhorn"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc"> New order received. Please take care of it. </div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date"> 5 hours </div>
																</div>
															</li>
															<li>
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-info">
																				<i class="fa fa-bullhorn"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc"> New order received. Please take care of it. </div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date"> 18 hours </div>
																</div>
															</li>
															<li>
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-default">
																				<i class="fa fa-bullhorn"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc"> New order received. Please take care of it. </div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date"> 21 hours </div>
																</div>
															</li>
															<li>
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-info">
																				<i class="fa fa-bullhorn"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc"> New order received. Please take care of it. </div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date"> 22 hours </div>
																</div>
															</li>
															<li>
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-default">
																				<i class="fa fa-bullhorn"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc"> New order received. Please take care of it. </div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date"> 21 hours </div>
																</div>
															</li>
															<li>
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-info">
																				<i class="fa fa-bullhorn"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc"> New order received. Please take care of it. </div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date"> 22 hours </div>
																</div>
															</li>
															<li>
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-default">
																				<i class="fa fa-bullhorn"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc"> New order received. Please take care of it. </div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date"> 21 hours </div>
																</div>
															</li>
															<li>
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-info">
																				<i class="fa fa-bullhorn"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc"> New order received. Please take care of it. </div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date"> 22 hours </div>
																</div>
															</li>
															<li>
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-default">
																				<i class="fa fa-bullhorn"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc"> New order received. Please take care of it. </div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date"> 21 hours </div>
																</div>
															</li>
															<li>
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-info">
																				<i class="fa fa-bullhorn"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc"> New order received. Please take care of it. </div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date"> 22 hours </div>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<!--tab-pane-->
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--tab_1_2-->
						<div class="tab-pane" id="tab_1_3">
							<div class="row profile-account">
								<div class="col-md-3">
									<ul class="ver-inline-menu tabbable margin-bottom-10">
										<li class="active">
											<a data-toggle="tab" href="#tab_1-1">
												<i class="fa fa-cog"></i> Personal info </a>
											<span class="after"> </span>
										</li>
										<li>
											<a data-toggle="tab" href="#tab_2-2">
												<i class="fa fa-picture-o"></i> Change Avatar </a>
										</li>
										<li>
											<a data-toggle="tab" href="#tab_3-3">
												<i class="fa fa-lock"></i> Change Password </a>
										</li>
										<li>
											<a data-toggle="tab" href="#tab_4-4">
												<i class="fa fa-eye"></i> Privacity Settings </a>
										</li>
									</ul>
								</div>
								<div class="col-md-9">
									<div class="tab-content">
										<div id="tab_1-1" class="tab-pane active">
											<form role="form" action="#">
												<div class="form-group">
													<label class="control-label">First Name</label>
													<input type="text" placeholder="John" class="form-control" /> </div>
												<div class="form-group">
													<label class="control-label">Last Name</label>
													<input type="text" placeholder="Doe" class="form-control" /> </div>
												<div class="form-group">
													<label class="control-label">Mobile Number</label>
													<input type="text" placeholder="+1 646 580 DEMO (6284)" class="form-control" /> </div>
												<div class="form-group">
													<label class="control-label">Interests</label>
													<input type="text" placeholder="Design, Web etc." class="form-control" /> </div>
												<div class="form-group">
													<label class="control-label">Occupation</label>
													<input type="text" placeholder="Web Developer" class="form-control" /> </div>
												<div class="form-group">
													<label class="control-label">About</label>
													<textarea class="form-control" rows="3" placeholder="We are KeenThemes!!!"></textarea>
												</div>
												<div class="form-group">
													<label class="control-label">Website Url</label>
													<input type="text" placeholder="http://www.mywebsite.com" class="form-control" /> </div>
												<div class="margiv-top-10">
													<a href="javascript:;" class="btn green"> Save Changes </a>
													<a href="javascript:;" class="btn default"> Cancel </a>
												</div>
											</form>
										</div>
										<div id="tab_2-2" class="tab-pane">
											<p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
											</p>
											<form action="#" role="form">
												<div class="form-group">
													<div class="fileinput fileinput-new" data-provides="fileinput">
														<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
															<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
														<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
														<div>
                                                                    <span class="btn default btn-file">
                                                                        <span class="fileinput-new"> Select image </span>
                                                                        <span class="fileinput-exists"> Change </span>
                                                                        <input type="file" name="..."> </span>
															<a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
														</div>
													</div>
													<div class="clearfix margin-top-10">
														<span class="label label-danger"> NOTE! </span>
														<span> Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
													</div>
												</div>
												<div class="margin-top-10">
													<a href="javascript:;" class="btn green"> Submit </a>
													<a href="javascript:;" class="btn default"> Cancel </a>
												</div>
											</form>
										</div>
										<div id="tab_3-3" class="tab-pane">
											<form action="#">
												<div class="form-group">
													<label class="control-label">Current Password</label>
													<input type="password" class="form-control" /> </div>
												<div class="form-group">
													<label class="control-label">New Password</label>
													<input type="password" class="form-control" /> </div>
												<div class="form-group">
													<label class="control-label">Re-type New Password</label>
													<input type="password" class="form-control" /> </div>
												<div class="margin-top-10">
													<a href="javascript:;" class="btn green"> Change Password </a>
													<a href="javascript:;" class="btn default"> Cancel </a>
												</div>
											</form>
										</div>
										<div id="tab_4-4" class="tab-pane">
											<form action="#">
												<table class="table table-bordered table-striped">
													<tr>
														<td> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus.. </td>
														<td>
															<label class="uniform-inline">
																<input type="radio" name="optionsRadios1" value="option1" /> Yes </label>
															<label class="uniform-inline">
																<input type="radio" name="optionsRadios1" value="option2" checked/> No </label>
														</td>
													</tr>
													<tr>
														<td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
														<td>
															<label class="uniform-inline">
																<input type="checkbox" value="" /> Yes </label>
														</td>
													</tr>
													<tr>
														<td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
														<td>
															<label class="uniform-inline">
																<input type="checkbox" value="" /> Yes </label>
														</td>
													</tr>
													<tr>
														<td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
														<td>
															<label class="uniform-inline">
																<input type="checkbox" value="" /> Yes </label>
														</td>
													</tr>
												</table>
												<!--end profile-settings-->
												<div class="margin-top-10">
													<a href="javascript:;" class="btn green"> Save Changes </a>
													<a href="javascript:;" class="btn default"> Cancel </a>
												</div>
											</form>
										</div>
									</div>
								</div>
								<!--end col-md-9-->
							</div>
						</div>
						<!--end tab-pane-->
						<div class="tab-pane" id="tab_1_6">
							<div class="row">
								<div class="col-md-2">
									<ul class="ver-inline-menu tabbable margin-bottom-10">
										<li class="active">
											<a data-toggle="tab" href="#tab_1">
												<i class="fa fa-briefcase"></i> General Questions </a>
											<span class="after"> </span>
										</li>
										<li>
											<a data-toggle="tab" href="#tab_2">
												<i class="fa fa-group"></i> Membership </a>
										</li>
										<li>
											<a data-toggle="tab" href="#tab_3">
												<i class="fa fa-leaf"></i> Terms Of Service </a>
										</li>
										<li>
											<a data-toggle="tab" href="#tab_1">
												<i class="fa fa-info-circle"></i> License Terms </a>
										</li>
										<li>
											<a data-toggle="tab" href="#tab_2">
												<i class="fa fa-tint"></i> Payment Rules </a>
										</li>
										<li>
											<a data-toggle="tab" href="#tab_3">
												<i class="fa fa-plus"></i> Other Questions </a>
										</li>
									</ul>
								</div>
								<div class="col-md-10">
									<div class="tab-content">
										<div id="tab_1" class="tab-pane active">
											<div id="accordion1" class="panel-group">
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1"> 1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
														</h4>
													</div>
													<div id="accordion1_1" class="panel-collapse collapse in">
														<div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
															laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
															anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
															heard of them accusamus labore sustainable VHS. </div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2"> 2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
														</h4>
													</div>
													<div id="accordion1_2" class="panel-collapse collapse">
														<div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit,
															enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
															moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
															ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable
															VHS. </div>
													</div>
												</div>
												<div class="panel panel-success">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3"> 3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ? </a>
														</h4>
													</div>
													<div id="accordion1_3" class="panel-collapse collapse">
														<div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit,
															enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
															moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
															ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable
															VHS. </div>
													</div>
												</div>
												<div class="panel panel-warning">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4"> 4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ? </a>
														</h4>
													</div>
													<div id="accordion1_4" class="panel-collapse collapse">
														<div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
															nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
															craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
													</div>
												</div>
												<div class="panel panel-danger">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5"> 5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ? </a>
														</h4>
													</div>
													<div id="accordion1_5" class="panel-collapse collapse">
														<div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
															nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
															craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
															wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6"> 6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ? </a>
														</h4>
													</div>
													<div id="accordion1_6" class="panel-collapse collapse">
														<div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
															nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
															craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
															wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_7"> 7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ? </a>
														</h4>
													</div>
													<div id="accordion1_7" class="panel-collapse collapse">
														<div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
															nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
															craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
															wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
													</div>
												</div>
											</div>
										</div>
										<div id="tab_2" class="tab-pane">
											<div id="accordion2" class="panel-group">
												<div class="panel panel-warning">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_1"> 1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
														</h4>
													</div>
													<div id="accordion2_1" class="panel-collapse collapse in">
														<div class="panel-body">
															<p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
																laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
																wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
																haven't heard of them accusamus labore sustainable VHS. </p>
															<p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
																laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
																wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
																haven't heard of them accusamus labore sustainable VHS. </p>
														</div>
													</div>
												</div>
												<div class="panel panel-danger">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_2"> 2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
														</h4>
													</div>
													<div id="accordion2_2" class="panel-collapse collapse">
														<div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit,
															enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
															moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
															ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable
															VHS. </div>
													</div>
												</div>
												<div class="panel panel-success">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_3"> 3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ? </a>
														</h4>
													</div>
													<div id="accordion2_3" class="panel-collapse collapse">
														<div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit,
															enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
															moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
															ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable
															VHS. </div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_4"> 4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ? </a>
														</h4>
													</div>
													<div id="accordion2_4" class="panel-collapse collapse">
														<div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
															nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
															craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_5"> 5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ? </a>
														</h4>
													</div>
													<div id="accordion2_5" class="panel-collapse collapse">
														<div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
															nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
															craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
															wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_6"> 6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ? </a>
														</h4>
													</div>
													<div id="accordion2_6" class="panel-collapse collapse">
														<div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
															nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
															craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
															wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_7"> 7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ? </a>
														</h4>
													</div>
													<div id="accordion2_7" class="panel-collapse collapse">
														<div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
															nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
															craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
															wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
													</div>
												</div>
											</div>
										</div>
										<div id="tab_3" class="tab-pane">
											<div id="accordion3" class="panel-group">
												<div class="panel panel-danger">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_1"> 1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
														</h4>
													</div>
													<div id="accordion3_1" class="panel-collapse collapse in">
														<div class="panel-body">
															<p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
																laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. </p>
															<p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
																laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. </p>
															<p> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
																craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
																you probably haven't heard of them accusamus labore sustainable VHS. </p>
														</div>
													</div>
												</div>
												<div class="panel panel-success">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_2"> 2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
														</h4>
													</div>
													<div id="accordion3_2" class="panel-collapse collapse">
														<div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit,
															enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
															moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
															ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable
															VHS. </div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_3"> 3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ? </a>
														</h4>
													</div>
													<div id="accordion3_3" class="panel-collapse collapse">
														<div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit,
															enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
															moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
															ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable
															VHS. </div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_4"> 4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ? </a>
														</h4>
													</div>
													<div id="accordion3_4" class="panel-collapse collapse">
														<div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
															nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
															craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_5"> 5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ? </a>
														</h4>
													</div>
													<div id="accordion3_5" class="panel-collapse collapse">
														<div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
															nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
															craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
															wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_6"> 6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ? </a>
														</h4>
													</div>
													<div id="accordion3_6" class="panel-collapse collapse">
														<div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
															nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
															craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
															wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_7"> 7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ? </a>
														</h4>
													</div>
													<div id="accordion3_7" class="panel-collapse collapse">
														<div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
															nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
															craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
															wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--end tab-pane-->
					</div>
				</div>
			</div>
		</div>
		<!-- END CONTENT BODY -->
	</div>
	<!-- END CONTENT -->
	<!-- BEGIN QUICK SIDEBAR -->
	<a href="javascript:;" class="page-quick-sidebar-toggler">
		<i class="icon-login"></i>
	</a>
	<div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
		<div class="page-quick-sidebar">
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
						<span class="badge badge-danger">2</span>
					</a>
				</li>
				<li>
					<a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
						<span class="badge badge-success">7</span>
					</a>
				</li>
				<li class="dropdown">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu pull-right">
						<li>
							<a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
								<i class="icon-bell"></i> Alerts </a>
						</li>
						<li>
							<a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
								<i class="icon-info"></i> Notifications </a>
						</li>
						<li>
							<a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
								<i class="icon-speech"></i> Activities </a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
								<i class="icon-settings"></i> Settings </a>
						</li>
					</ul>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
					<div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
						<h3 class="list-heading">Staff</h3>
						<ul class="media-list list-items">
							<li class="media">
								<div class="media-status">
									<span class="badge badge-success">8</span>
								</div>
								<img class="media-object" src="{{  asset('/layouts/layout/img/avatar3.jpg') }}" alt="...">
								<div class="media-body">
									<h4 class="media-heading">Bob Nilson</h4>
									<div class="media-heading-sub"> Project Manager </div>
								</div>
							</li>
							<li class="media">
								<img class="media-object" src="{{  asset('/layouts/layout/img/avatar1.jpg') }}" alt="...">
								<div class="media-body">
									<h4 class="media-heading">Nick Larson</h4>
									<div class="media-heading-sub"> Art Director </div>
								</div>
							</li>
							<li class="media">
								<div class="media-status">
									<span class="badge badge-danger">3</span>
								</div>
								<img class="media-object" src="{{  asset('/layouts/layout/img/avatar4.jpg') }}" alt="...">
								<div class="media-body">
									<h4 class="media-heading">Deon Hubert</h4>
									<div class="media-heading-sub"> CTO </div>
								</div>
							</li>
							<li class="media">
								<img class="media-object" src="{{  asset('/layouts/layout/img/avatar2.jpg') }}" alt="...">
								<div class="media-body">
									<h4 class="media-heading">Ella Wong</h4>
									<div class="media-heading-sub"> CEO </div>
								</div>
							</li>
						</ul>
						<h3 class="list-heading">Customers</h3>
						<ul class="media-list list-items">
							<li class="media">
								<div class="media-status">
									<span class="badge badge-warning">2</span>
								</div>
								<img class="media-object" src="{{  asset('/layouts/layout/img/avatar6.jpg') }}" alt="...">
								<div class="media-body">
									<h4 class="media-heading">Lara Kunis</h4>
									<div class="media-heading-sub"> CEO, Loop Inc </div>
									<div class="media-heading-small"> Last seen 03:10 AM </div>
								</div>
							</li>
							<li class="media">
								<div class="media-status">
									<span class="label label-sm label-success">new</span>
								</div>
								<img class="media-object" src="{{  asset('/layouts/layout/img/avatar7.jpg') }}   " alt="...">
								<div class="media-body">
									<h4 class="media-heading">Ernie Kyllonen</h4>
									<div class="media-heading-sub"> Project Manager,
										<br> SmartBizz PTL </div>
								</div>
							</li>
							<li class="media">
								<img class="media-object" src="{{  asset('/layouts/layout/img/avatar8.jpg') }} " alt="...">
								<div class="media-body">
									<h4 class="media-heading">Lisa Stone</h4>
									<div class="media-heading-sub"> CTO, Keort Inc </div>
									<div class="media-heading-small"> Last seen 13:10 PM </div>
								</div>
							</li>
							<li class="media">
								<div class="media-status">
									<span class="badge badge-success">7</span>
								</div>
								<img class="media-object" src="{{  asset('/layouts/layout/img/avatar9.jpg') }}   " alt="...">
								<div class="media-body">
									<h4 class="media-heading">Deon Portalatin</h4>
									<div class="media-heading-sub"> CFO, H&D LTD </div>
								</div>
							</li>
							<li class="media">
								<img class="media-object" src="{{  asset('/layouts/layout/img/avatar10.jpg') }}  " alt="...">
								<div class="media-body">
									<h4 class="media-heading">Irina Savikova</h4>
									<div class="media-heading-sub"> CEO, Tizda Motors Inc </div>
								</div>
							</li>
							<li class="media">
								<div class="media-status">
									<span class="badge badge-danger">4</span>
								</div>
								<img class="media-object" src="{{  asset('/layouts/layout/img/avatar11.jpg') }} " alt="...">
								<div class="media-body">
									<h4 class="media-heading">Maria Gomez</h4>
									<div class="media-heading-sub"> Manager, Infomatic Inc </div>
									<div class="media-heading-small"> Last seen 03:10 AM </div>
								</div>
							</li>
						</ul>
					</div>
					<div class="page-quick-sidebar-item">
						<div class="page-quick-sidebar-chat-user">
							<div class="page-quick-sidebar-nav">
								<a href="javascript:;" class="page-quick-sidebar-back-to-list">
									<i class="icon-arrow-left"></i>Back</a>
							</div>
							<div class="page-quick-sidebar-chat-user-messages">
								<div class="post out">
									<img class="avatar" alt="" src="{{  asset(' /layouts/layout/img/avatar3.jpg') }} " />
									<div class="message">
										<span class="arrow"></span>
										<a href="javascript:;" class="name">Bob Nilson</a>
										<span class="datetime">20:15</span>
										<span class="body"> When could you send me the report ? </span>
									</div>
								</div>
								<div class="post in">
									<img class="avatar" alt="" src="{{  asset(' /layouts/layout/img/avatar2.jpg') }}  " />
									<div class="message">
										<span class="arrow"></span>
										<a href="javascript:;" class="name">Ella Wong</a>
										<span class="datetime">20:15</span>
										<span class="body"> Its almost done. I will be sending it shortly </span>
									</div>
								</div>
								<div class="post out">
									<img class="avatar" alt="" src="{{  asset('/layouts/layout/img/avatar3.jpg') }}   " />
									<div class="message">
										<span class="arrow"></span>
										<a href="javascript:;" class="name">Bob Nilson</a>
										<span class="datetime">20:15</span>
										<span class="body"> Alright. Thanks! :) </span>
									</div>
								</div>
								<div class="post in">
									<img class="avatar" alt="" src="{{  asset('/layouts/layout/img/avatar2.jpg') }}   " />
									<div class="message">
										<span class="arrow"></span>
										<a href="javascript:;" class="name">Ella Wong</a>
										<span class="datetime">20:16</span>
										<span class="body"> You are most welcome. Sorry for the delay. </span>
									</div>
								</div>
								<div class="post out">
									<img class="avatar" alt="" src="{{  asset('/layouts/layout/img/avatar3.jpg') }}   " />
									<div class="message">
										<span class="arrow"></span>
										<a href="javascript:;" class="name">Bob Nilson</a>
										<span class="datetime">20:17</span>
										<span class="body"> No probs. Just take your time :) </span>
									</div>
								</div>
								<div class="post in">
									<img class="avatar" alt="" src="{{  asset('/layouts/layout/img/avatar2.jpg') }}   " />
									<div class="message">
										<span class="arrow"></span>
										<a href="javascript:;" class="name">Ella Wong</a>
										<span class="datetime">20:40</span>
										<span class="body"> Alright. I just emailed it to you. </span>
									</div>
								</div>
								<div class="post out">
									<img class="avatar" alt="" src="{{  asset('/layouts/layout/img/avatar3.jpg') }}    " />
									<div class="message">
										<span class="arrow"></span>
										<a href="javascript:;" class="name">Bob Nilson</a>
										<span class="datetime">20:17</span>
										<span class="body"> Great! Thanks. Will check it right away. </span>
									</div>
								</div>
								<div class="post in">
									<img class="avatar" alt="" src="{{  asset('/layouts/layout/img/avatar2.jpg') }}    " />
									<div class="message">
										<span class="arrow"></span>
										<a href="javascript:;" class="name">Ella Wong</a>
										<span class="datetime">20:40</span>
										<span class="body"> Please let me know if you have any comment. </span>
									</div>
								</div>
								<div class="post out">
									<img class="avatar" alt="" src="{{  asset('/layouts/layout/img/avatar3.jpg') }}  " />
									<div class="message">
										<span class="arrow"></span>
										<a href="javascript:;" class="name">Bob Nilson</a>
										<span class="datetime">20:17</span>
										<span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>
									</div>
								</div>
							</div>
							<div class="page-quick-sidebar-chat-user-form">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Type a message here...">
									<div class="input-group-btn">
										<button type="button" class="btn green">
											<i class="icon-paper-clip"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
					<div class="page-quick-sidebar-alerts-list">
						<h3 class="list-heading">General</h3>
						<ul class="feeds list-items">
							<li>
								<div class="col1">
									<div class="cont">
										<div class="cont-col1">
											<div class="label label-sm label-info">
												<i class="fa fa-check"></i>
											</div>
										</div>
										<div class="cont-col2">
											<div class="desc"> You have 4 pending tasks.
                                                        <span class="label label-sm label-warning "> Take action
                                                            <i class="fa fa-share"></i>
                                                        </span>
											</div>
										</div>
									</div>
								</div>
								<div class="col2">
									<div class="date"> Just now </div>
								</div>
							</li>
							<li>
								<a href="javascript:;">
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-success">
													<i class="fa fa-bar-chart-o"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc"> Finance Report for year 2013 has been released. </div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date"> 20 mins </div>
									</div>
								</a>
							</li>
							<li>
								<div class="col1">
									<div class="cont">
										<div class="cont-col1">
											<div class="label label-sm label-danger">
												<i class="fa fa-user"></i>
											</div>
										</div>
										<div class="cont-col2">
											<div class="desc"> You have 5 pending membership that requires a quick review. </div>
										</div>
									</div>
								</div>
								<div class="col2">
									<div class="date"> 24 mins </div>
								</div>
							</li>
							<li>
								<div class="col1">
									<div class="cont">
										<div class="cont-col1">
											<div class="label label-sm label-info">
												<i class="fa fa-shopping-cart"></i>
											</div>
										</div>
										<div class="cont-col2">
											<div class="desc"> New order received with
												<span class="label label-sm label-success"> Reference Number: DR23923 </span>
											</div>
										</div>
									</div>
								</div>
								<div class="col2">
									<div class="date"> 30 mins </div>
								</div>
							</li>
							<li>
								<div class="col1">
									<div class="cont">
										<div class="cont-col1">
											<div class="label label-sm label-success">
												<i class="fa fa-user"></i>
											</div>
										</div>
										<div class="cont-col2">
											<div class="desc"> You have 5 pending membership that requires a quick review. </div>
										</div>
									</div>
								</div>
								<div class="col2">
									<div class="date"> 24 mins </div>
								</div>
							</li>
							<li>
								<div class="col1">
									<div class="cont">
										<div class="cont-col1">
											<div class="label label-sm label-info">
												<i class="fa fa-bell-o"></i>
											</div>
										</div>
										<div class="cont-col2">
											<div class="desc"> Web server hardware needs to be upgraded.
												<span class="label label-sm label-warning"> Overdue </span>
											</div>
										</div>
									</div>
								</div>
								<div class="col2">
									<div class="date"> 2 hours </div>
								</div>
							</li>
							<li>
								<a href="javascript:;">
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-default">
													<i class="fa fa-briefcase"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc"> IPO Report for year 2013 has been released. </div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date"> 20 mins </div>
									</div>
								</a>
							</li>
						</ul>
						<h3 class="list-heading">System</h3>
						<ul class="feeds list-items">
							<li>
								<div class="col1">
									<div class="cont">
										<div class="cont-col1">
											<div class="label label-sm label-info">
												<i class="fa fa-check"></i>
											</div>
										</div>
										<div class="cont-col2">
											<div class="desc"> You have 4 pending tasks.
                                                        <span class="label label-sm label-warning "> Take action
                                                            <i class="fa fa-share"></i>
                                                        </span>
											</div>
										</div>
									</div>
								</div>
								<div class="col2">
									<div class="date"> Just now </div>
								</div>
							</li>
							<li>
								<a href="javascript:;">
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-danger">
													<i class="fa fa-bar-chart-o"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc"> Finance Report for year 2013 has been released. </div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date"> 20 mins </div>
									</div>
								</a>
							</li>
							<li>
								<div class="col1">
									<div class="cont">
										<div class="cont-col1">
											<div class="label label-sm label-default">
												<i class="fa fa-user"></i>
											</div>
										</div>
										<div class="cont-col2">
											<div class="desc"> You have 5 pending membership that requires a quick review. </div>
										</div>
									</div>
								</div>
								<div class="col2">
									<div class="date"> 24 mins </div>
								</div>
							</li>
							<li>
								<div class="col1">
									<div class="cont">
										<div class="cont-col1">
											<div class="label label-sm label-info">
												<i class="fa fa-shopping-cart"></i>
											</div>
										</div>
										<div class="cont-col2">
											<div class="desc"> New order received with
												<span class="label label-sm label-success"> Reference Number: DR23923 </span>
											</div>
										</div>
									</div>
								</div>
								<div class="col2">
									<div class="date"> 30 mins </div>
								</div>
							</li>
							<li>
								<div class="col1">
									<div class="cont">
										<div class="cont-col1">
											<div class="label label-sm label-success">
												<i class="fa fa-user"></i>
											</div>
										</div>
										<div class="cont-col2">
											<div class="desc"> You have 5 pending membership that requires a quick review. </div>
										</div>
									</div>
								</div>
								<div class="col2">
									<div class="date"> 24 mins </div>
								</div>
							</li>
							<li>
								<div class="col1">
									<div class="cont">
										<div class="cont-col1">
											<div class="label label-sm label-warning">
												<i class="fa fa-bell-o"></i>
											</div>
										</div>
										<div class="cont-col2">
											<div class="desc"> Web server hardware needs to be upgraded.
												<span class="label label-sm label-default "> Overdue </span>
											</div>
										</div>
									</div>
								</div>
								<div class="col2">
									<div class="date"> 2 hours </div>
								</div>
							</li>
							<li>
								<a href="javascript:;">
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-briefcase"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc"> IPO Report for year 2013 has been released. </div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date"> 20 mins </div>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
					<div class="page-quick-sidebar-settings-list">
						<h3 class="list-heading">General Settings</h3>
						<ul class="list-items borderless">
							<li> Enable Notifications
								<input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
							<li> Allow Tracking
								<input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
							<li> Log Errors
								<input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
							<li> Auto Sumbit Issues
								<input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
							<li> Enable SMS Alerts
								<input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
						</ul>
						<h3 class="list-heading">System Settings</h3>
						<ul class="list-items borderless">
							<li> Security Level
								<select class="form-control input-inline input-sm input-small">
									<option value="1">Normal</option>
									<option value="2" selected>Medium</option>
									<option value="e">High</option>
								</select>
							</li>
							<li> Failed Email Attempts
								<input class="form-control input-inline input-sm input-small" value="5" /> </li>
							<li> Secondary SMTP Port
								<input class="form-control input-inline input-sm input-small" value="3560" /> </li>
							<li> Notify On System Error
								<input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
							<li> Notify On SMTP Error
								<input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
						</ul>
						<div class="inner-content">
							<button class="btn btn-success">
								<i class="icon-settings"></i> Save Changes</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->

<!-- END FOOTER -->
<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>

<script src="../assets" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="../assets" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="../assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="../assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->




<!-- BEGIN CORE PLUGINS -->
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
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
<script src=" {{  asset('/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}" type="text/javascript"></script>
<script src=" {{  asset('/global/plugins/gmaps/gmaps.min.js') }}" type="text/javascript"></script>
<script src=" {{  asset('/global/scripts/app.min.js') }}" type="text/javascript"></script>
<script src=" {{  asset('/layouts/layout/scripts/layout.min.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src=" {{  asset('/layouts/layout/scripts/demo.min.js') }}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{  asset('/layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->




</body>

</html>