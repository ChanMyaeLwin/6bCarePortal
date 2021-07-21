<?php error_reporting(0);?>
<!-- Loader -->
@if(Route::is(['map-grid','map-list']))
<div id="loader">
		<div class="loader">
			<span></span>
			<span></span>
		</div>
	</div>
	@endif
	<!-- /Loader  -->
<div class="main-wrapper">
<!-- Header -->
<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="index" class="navbar-brand logo">
							<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index" class="menu-logo">
								<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="{{ Request::is('index') ? 'active' : '' }}">
								<a href="index">Home</a>
							</li>
							<li class="{{ Request::is('appoitment') ? 'active' : '' }}">
								<a href="index">Make Appoitment</a>
							</li>
							<li class="{{ Request::is('blogs') ? 'active' : '' }}">
								<a href="index">Our Service</a>
							</li>
							<li class="{{ Request::is('blogs') ? 'active' : '' }}">
								<a href="index">Blogs</a>
							</li>
							<li class="{{ Request::is('blogs') ? 'active' : '' }}">
								<a href="index">About Us</a>
							</li>
						</ul>		 
					</div>		 
					<ul class="nav header-navbar-rht">
						<li class="nav-item contact-item">
							<div class="header-contact-img">
								<i class="far fa-hospital"></i>							
							</div>
							<div class="header-contact-detail">
								<p class="contact-header">Contact</p>
								<p class="contact-info-header"> +95 97 98392286</p>
							</div>
							@guest
							<li class="nav-item">
							<a class="nav-link header-login" href="login">login / Signup </a>
							</li>
							@endguest
						</li>
						@can('patient_header')
						<li class="nav-item dropdown has-arrow logged-item">
							<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
								<span class="user-img">
									<img class="rounded-circle" src="assets/img/patients/patient.jpg" width="31" alt="Ryan Taylor">
								</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="user-header">
									<div class="avatar avatar-sm">
										<img src="assets/img/patients/patient.jpg" alt="User Image" class="avatar-img rounded-circle">
									</div>
									<div class="user-text">
										<h6>Richard Wilson</h6>
										<p class="text-muted mb-0">Patient</p>
									</div>
								</div>
								<a class="dropdown-item" href="patient-dashboard">Dashboard</a>
								<a class="dropdown-item" href="profile-settings">Profile Settings</a>
								<a class="dropdown-item" href="login">Logout</a>
							</div>
						</li>
						@endcan
						<!-- User Menu -->
						<li class="nav-item dropdown has-arrow logged-item">
							<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
								<span class="user-img">
									<img class="rounded-circle" src="assets/img/doctors/doctor-thumb-02.jpg" width="31" alt="Darren Elder">
								</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="user-header">
									<div class="avatar avatar-sm">
										<img src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image" class="avatar-img rounded-circle">
									</div>
									<div class="user-text">
										<h6>Darren Elder</h6>
										<p class="text-muted mb-0">Doctor</p>
									</div>
								</div>
								<a class="dropdown-item" href="doctor-dashboard">Dashboard</a>
								<a class="dropdown-item" href="doctor-profile-settings">Profile Settings</a>
								<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
							</div>
						</li>
						<!-- /User Menu -->
					</ul>
				</nav>
			</header>
			<!-- /Header -->