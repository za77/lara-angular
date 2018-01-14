<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	
	<title>DEVELOPER - @yield('title')</title>
	
	<!-- BEGIN CORE FRAMEWORK -->
	<link href="{{ url('public/dev/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ url('public/dev/assets/plugins/ionicons/css/ionicons.min.css') }}" rel="stylesheet" />
	<link href="{{ url('public/dev/assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
	<!-- END CORE FRAMEWORK -->
	
	<!-- BEGIN PLUGIN STYLES -->
	<link href="{{ url('public/dev/assets/plugins/animate/animate.css') }}" rel="stylesheet" />
	<link href="{{ url('public/dev/assets/plugins/bootstrap-slider/css/slider.css') }}" rel="stylesheet" />
	<link href="{{ url('public/dev/assets/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" />
	<!-- END PLUGIN STYLES -->
	
	<!-- BEGIN THEME STYLES -->
	<link href="{{ url('public/dev/assets/css/material.css') }}" rel="stylesheet" />
	<link href="{{ url('public/dev/assets/css/style.css') }}" rel="stylesheet" />
	<link href="{{ url('public/dev/assets/css/plugins.css') }}" rel="stylesheet" />
	<link href="{{ url('public/dev/assets/css/helpers.css') }}" rel="stylesheet" />
	<link href="{{ url('public/dev/assets/css/responsive.css') }}" rel="stylesheet" />
	<!-- END THEME STYLES -->
    
    <link href="{{ url('public/dev/assets/img/favicon.ico') }}" type="image/x-icon" rel="icon">

    
    
    
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-leftside fixed-header">
	<!-- BEGIN HEADER -->
	 @include('devLayout.header')
	<!-- END HEADER -->
		 
	<div class="wrapper">
		<!-- BEGIN LEFTSIDE -->
       @include('devLayout.sidebar')
		<!-- END LEFTSIDE -->

		 @yield('content')
        
    </div><!-- /.wrapper -->
	<!-- END CONTENT -->
		
	<!-- BEGIN JAVASCRIPTS -->
	
	<!-- BEGIN CORE PLUGINS -->
	<script src="{{ url('public/dev/assets/plugins/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
	<script src="{{ url('public/dev/assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ url('public/dev/assets/plugins/bootstrap/js/holder.js') }}"></script>
	<script src="{{ url('public/dev/assets/plugins/pace/pace.min.js') }}" type="text/javascript"></script>
	<script src="{{ url('public/dev/assets/plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
	<script src="{{ url('public/dev/assets/js/core.js') }}" type="text/javascript"></script>
	<!-- END CORE PLUGINS -->
	
	
	
    <!-- datatables -->
	<script src="{{ url('public/dev/assets/plugins/datatables/jquery.dataTables.js') }}" type="text/javascript"></script>
	<script src="{{ url('public/dev/assets/plugins/datatables/dataTables.bootstrap.js') }}" type="text/javascript"></script>
	
	<!-- counter -->
	<script src="{{ url('public/dev/assets/plugins/jquery-countTo/jquery.countTo.js') }}" type="text/javascript"></script>
	
	<script src="{{ url('public/js/jciLib.min.js') }}" type="text/javascript" /></script>
	
	
    
    <script type="text/javascript">
    	$(document).ready(function() {
    $('table.display').DataTable();
} );
    </script>

	 

	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>