@extends('layout.mainlayout_admin')
@section('content')	
<!-- Main Wrapper -->
<div class="main-wrapper error-page">
			
			<div class="error-box">
				<h1>403</h1>
				<h3 class="h2 mb-3"><i class="fa fa-warning"></i> Oops! !</h3>
				<p class="h4 font-weight-normal">This action is unauthorized.</p>
				<a href="{{route('page.index')}}" class="btn btn-primary">Back to Home</a>
			</div>
		
        </div>
		<!-- /Main Wrapper -->
@endsection