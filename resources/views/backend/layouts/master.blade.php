<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from phantom-themes.com/metro/theme/templates/admin1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Sep 2019 03:25:56 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Admin</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <link href="{{asset('ui/backend/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{asset('ui/backend/plugins/icomoon/style.css')}}" rel="stylesheet">
        <link href="{{asset('ui/backend/plugins/waves/waves.min.css')}}" rel="stylesheet">
        <link href="{{asset('ui/backend/plugins/uniform/css/default.css')}}" rel="stylesheet">
        <link href="{{asset('ui/backend/plugins/switchery/switchery.min.css')}}" rel="stylesheet"/>
        <link href="{{asset('ui/backend/plugins/nvd3/nv.d3.min.css')}}" rel="stylesheet">  
        @yield('css')
      
        <!-- Theme Styles -->
        <link href="{{asset('ui/backend/css/metrotheme.min.css')}}" rel="stylesheet">
        <link href="{{asset('ui/backend/css/custom.css')}}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!-- Page Container -->
        <div class="page-container">
            @include('backend.layouts.partials.sidebar')
            
            <!-- Page Content -->
            <div class="page-content">
            
            @include('backend.layouts.partials.header')
                
                <!-- Page Inner -->
                @yield('content')
            </div><!-- /Page Content -->
        </div><!-- /Page Container -->
        
        
        <!-- Javascripts -->
        <script src="{{asset('ui/backend/plugins/jquery/jquery-3.1.0.min.js')}}"></script>
        <script src="{{asset('ui/backend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('ui/backend/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('ui/backend/plugins/waves/waves.min.js')}}"></script>
        <script src="{{asset('ui/backend/plugins/uniform/js/jquery.uniform.standalone.js')}}"></script>
        <script src="{{asset('ui/backend/plugins/switchery/switchery.min.js')}}"></script>
        <script src="{{asset('ui/backend/plugins/d3/d3.min.js')}}"></script>
        <script src="{{asset('ui/backend/plugins/nvd3/nv.d3.min.js')}}"></script>
        <script src="{{asset('ui/backend/plugins/flot/jquery.flot.min.js')}}"></script>
        <script src="{{asset('ui/backend/plugins/flot/jquery.flot.time.min.js')}}"></script>
        <script src="{{asset('ui/backend/plugins/flot/jquery.flot.symbol.min.js')}}"></script>
        <script src="{{asset('ui/backend/plugins/flot/jquery.flot.resize.min.js')}}"></script>
        <script src="{{asset('ui/backend/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('ui/backend/plugins/flot/jquery.flot.pie.min.js')}}"></script>
        <script src="{{asset('ui/backend/plugins/chartjs/chart.min.js')}}"></script>
        <script src="{{asset('ui/backend/js/metrotheme.min.js')}}"></script>
        <script src="{{asset('ui/backend/js/pages/dashboard.js')}}"></script>
        @yield('script')
    </body>

<!-- Mirrored from phantom-themes.com/metro/theme/templates/admin1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Sep 2019 03:27:05 GMT -->
</html>