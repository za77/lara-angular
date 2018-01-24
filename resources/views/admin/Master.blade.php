<!doctype html>
<html lang="en" ng-app="app"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="{{asset('public/assets/img/favicon-16x16.png')}}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{asset('public/assets/img/favicon-32x32.png')}}" sizes="32x32">

    <title>Lara @yield('title')</title>

        <link rel="stylesheet" 
        href="{{asset('public/bower_components/weather-icons/css/weather-icons.min.css')}}" media="all">
        <!-- metrics graphics (charts) -->
        <link rel="stylesheet" href="{{asset('public/bower_components/metrics-graphics/dist/metricsgraphics.css')}}">
        <!-- chartist -->
        
    
    <!-- uikit -->
    <link rel="stylesheet" href="{{asset('public/bower_components/uikit/css/uikit.almost-flat.min.css')}}" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="{{asset('public/assets/icons/flags/flags.min.css')}}" media="all">

    <!-- altair admin -->
    <link rel="stylesheet" href="{{asset('public/assets/css/main.min.css')}}" media="all">

    <script src="{{asset('public/bower_components/angular/angular.min.js')}}"></script>
    <script src="{{asset('public/bower_components/angular-route/angular-route.min.js')}}"></script>
    <script src="{{asset('public/bower_components/angular-cookie/angular-cookie.min.js')}}"></script>

</head>
<body class=" sidebar_main_open sidebar_main_swipe">
    <!-- main header -->
   @include('layout.header')
    <!-- main sidebar -->
    @include('layout.side')
    <!-- main sidebar end -->

    <div id="page_content">
        <ng-view>
            
        </ng-view>
    </div>

    <!-- google web fonts -->
    <script>
        WebFontConfig = {
            google: {
                families: [
                    'Source+Code+Pro:400,700:latin',
                    'Roboto:400,300,500,700,400italic:latin'
                ]
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <script src="{{url('resources/assets/app.js')}}"></script>
    <script src="{{url('resources/assets/routes.js')}}"></script>
    <script src="{{url('resources/assets/controllers/dashboard/DashboardController.js')}}"></script>

    <!-- common functions -->
    <script src="{{asset('public/assets/js/common.min.js')}}"></script>
    <!-- uikit functions -->
    <script src="{{asset('public/assets/js/uikit_custom.min.js')}}"></script>
    <!-- altair common functions/helpers -->
    <script src="{{asset('public/assets/js/altair_admin_common.min.js')}}"></script>

    <!-- page specific plugins -->
        <!-- d3 -->
        <script src="{{asset('public/bower_components/d3/d3.min.js')}}"></script>
        <!-- metrics graphics (charts) -->
        <script src="{{asset('public/bower_components/metrics-graphics/dist/metricsgraphics.min.js')}}"></script>
        <!-- chartist (charts) -->
        
        <!-- maplace (google maps) -->
        
        <script src="{{asset('public/bower_components/maplace-js/dist/maplace.min.js')}}"></script>
        <!-- peity (small charts) -->
        <script src="{{asset('public/bower_components/peity/jquery.peity.min.js')}}"></script>
        <!-- easy-pie-chart (circular statistics) -->
        <script src="{{asset('public/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
        <!-- countUp -->
        
        <!-- handlebars.js')}} -->
        <script src="{{asset('public/bower_components/handlebars/handlebars.min.js')}}"></script>
        <script src="{{asset('public/assets/js/custom/handlebars_helpers.min.js')}}"></script>
        <!-- CLNDR -->
        <script src="{{asset('public/bower_components/clndr/src/clndr.js')}}"></script>
        <!-- fitvids -->
        <script src="{{asset('public/bower_components/fitvids/jquery.fitvids.js')}}"></script>

        <!--  dashbord functions -->
        
    
    <script>
        $(function() {
            // enable hires images
            altair_helpers.retina_images();
            // fastClick (touch devices)
            if(Modernizr.touch) {
                FastClick.attach(document.body);
            }
        });
    </script>


   

   
</body>
</html>