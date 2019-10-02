<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from phantom-themes.com/metro/theme/templates/admin1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Sep 2019 03:32:48 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Register</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <link href="{{asset('ui/backend/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('ui/backend/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('ui/backend/plugins/icomoon/style.css')}}" rel="stylesheet">
        <link href="{{asset('ui/backend/plugins/waves/waves.min.css')}}" rel="stylesheet">
        <link href="{{asset('ui/backend/plugins/uniform/css/default.css')}}" rel="stylesheet">
      
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
        <div class="page-container login-page">
            
            <!-- Page Content -->
            <div class="page-content">
            
                <!-- Page Inner -->
                <div class="page-inner">
                <div id="main-wrapper"><div class="row">
                        <div class="col-md-4 col-login-box-alt">
                            <div class="panel panel-white login-box">
                                    <div class="panel-body">
                                            <a href="index.html" class="logo-name">Flipmart</a>
                                            <p class="m-t-md">Create an account</p>
                                            <form class="m-t-md" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>
                                                    @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email" value="{{ old('email') }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="password" class="password form-control" placeholder="Password" required>
                                                    @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                                </div>
                                                <div class="form-group">
                                                        <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
                                                </div>
                                                    <button type="submit" class="btn btn-success btn-block metro-submit-reg-button">Submit</button>
                                            <a href="{{ route('login') }}" class="btn btn-default btn-block">Login</a>
                                            </form>
                                            <p class="text-center m-t-xs text-sm login-footer">2018 &copy; stacks</p>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Main Wrapper -->
                </div><!-- /Page Inner -->
            </div><!-- /Page Content -->
        </div><!-- /Page Container -->
        
        
        <!-- Javascripts -->
        <script src="{{asset('ui/backend/plugins/jquery/jquery-3.1.0.min.js')}}"></script>
        <script src="{{asset('ui/backend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('ui/backend/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('ui/backend/plugins/waves/waves.min.js')}}"></script>
        <script src="{{asset('ui/backend/plugins/uniform/js/jquery.uniform.standalone.js')}}"></script>
        <script src="{{asset('ui/backend/js/metrotheme.min.js')}}"></script>
    </body>

<!-- Mirrored from phantom-themes.com/metro/theme/templates/admin1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Sep 2019 03:32:48 GMT -->
</html>