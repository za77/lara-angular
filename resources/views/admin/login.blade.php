<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	
	<title>JCI - India Projects</title>
	
	<!-- BEGIN CORE FRAMEWORK -->
	<link href="{{url('/public/admin/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{url('/public/admin/assets/plugins/ionicons/css/ionicons.min.css')}}" rel="stylesheet" />
	<link href="{{url('/public/admin/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
	<!-- END CORE FRAMEWORK -->
	
	<!-- BEGIN PLUGIN STYLES -->
	<link href="{{url('/public/admin/assets/plugins/animate/animate.css')}}" rel="stylesheet" />
	<link href="{{url('/public/admin/assets/plugins/bootstrapValidator/bootstrapValidator.min.css')}}" rel="stylesheet" />
	<link href="{{url('/public/admin/assets/plugins/switchery/switchery.min.css')}}" rel="stylesheet" />
	<!-- END PLUGIN STYLES -->
	
	<!-- BEGIN THEME STYLES -->
	<link href="{{url('/public/admin/assets/css/material.css')}}" rel="stylesheet" />
	<link href="{{url('/public/admin/assets/css/style.css')}}" rel="stylesheet" />
	<link href="{{url('/public/admin/assets/css/plugins.css')}}" rel="stylesheet" />
	<link href="{{url('/public/admin/assets/css/helpers.css')}}" rel="stylesheet" />
	<link href="{{url('/public/admin/assets/css/responsive.css')}}" rel="stylesheet" />
	<!-- END THEME STYLES -->
    
    <link href="{{url('/public/admin/assets/img/favicon.ico')}}" type="image/x-icon" rel="icon">
    
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="auth-page height-auto" style="background-color:#0088cf;" >
	<!-- BEGIN CONTENT -->
	<div class="wrapper animated fadeInDown">
		<div class="panel overflow-hidden">
			<div class="bg-white padding-top-25 no-margin-bottom font-size-20 color-white text-center text-uppercase">
				<img src="{{url('/public/admin/assets/img/logo-new.png')}}">
			</div>
			<form id="checkform" method="post" action="{{ url('/login')}}">
				<div class="box-body padding-md">	
				
					<div class="form-group">
						<input type="text" name="email" class="form-control input-lg" placeholder="Username"/>
					</div>
					
					<div class="form-group">
						<input type="password" name="password" class="form-control input-lg" placeholder="Password"/>
					</div>        
					
					<div class="form-group margin-top-20 text-right">
						<a href="" class="color-blue-600">Forgot Password?</a>
					</div>  
														
					<button type="submit"  class="btn btn-dark bg-blue-600 padding-10 btn-block color-white"><i class="ion-log-in"></i> Login</button>  
				</div>
				{{ csrf_field() }}
			</form>
			<div class="panel-footer padding-md no-margin no-border bg-grey-500 text-center color-white">&copy; 2018 WITT Gas Lead Form. All Rights Reserved.</div>
		</div>
	</div>
	<!-- END CONTENT -->
	<script type="text/javascript"></script>
	<!-- BEGIN JAVASCRIPTS -->
	
	<!-- BEGIN CORE PLUGINS -->
	<script src="{{url('/public/admin/assets/plugins/jquery-1.11.1.min.js')}}" type="text/javascript"></script>
	<script src="{{url('/public/admin/assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{url('/public/admin/assets/plugins/bootstrap/js/holder.js')}}"></script>
	<script src="{{url('/public/admin/assets/plugins/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
	<script src="{{url('/public/admin/assets/js/core.js')}}" type="text/javascript"></script>
	<!-- END CORE PLUGINS -->
	
	<!-- bootstrap validator -->
	<script src="{{url('/public/admin/assets/plugins/bootstrapValidator/bootstrapValidator.min.js')}}" type="text/javascript"></script>
	
	<!-- switchery -->
	<script src="{{url('/public/admin/assets/plugins/switchery/switchery.min.js')}}" type="text/javascript"></script>
	
	<!-- maniac -->
	
	<script src="{{url('/public/js/app.min.js')}}" type="text/javascript"></script>
	
	
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->

<!-- Mirrored from yakuzi.eu/maniac/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Oct 2016 07:04:45 GMT -->
</html>