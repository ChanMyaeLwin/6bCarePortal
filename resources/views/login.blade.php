@extends('layout.mainlayout')
@section('content')
	<!-- Page Content -->
    <div class="content account-page" style="padding: 50px 0;">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-8 offset-md-2">
							
							<!-- Login Tab Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Login">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Login to <span>6b Care</span></h3>
										</div>
										<form method="POST" action="{{ route('login') }}">
                        					@csrf
											<div class="form-group form-focus">
												<input type="text" class="form-control floating" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
												<label class="focus-label">Phone</label>
												@error('phone')
													<div class="invalid-feedback d-block">
														{{ $message }}
													</div>
												@enderror
											</div>
											<div class="form-group form-focus">
												<input type="password" name="password" class="form-control floating">
												<label class="focus-label">Password</label>
												@error('password')
													<div class="invalid-feedback d-block">
														{{ $message }}
													</div>
												@enderror
											</div>
											<div class="text-right">
												<a class="forgot-link" href="forgot-password">Forgot Password ?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
											<div class="login-or">
												<span class="or-line"></span>
												<span class="span-or">or</span>
											</div>
											<div class="row form-row social-login">
												<div class="col-6">
													<a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
												</div>
												<div class="col-6">
													<a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
												</div>
											</div>
											<div class="text-center dont-have">Don’t have an account? <a href="register">Register</a></div>
										</form>
									</div>
								</div>
							</div>
							<!-- /Login Tab Content -->
								
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
            </div>
@endsection