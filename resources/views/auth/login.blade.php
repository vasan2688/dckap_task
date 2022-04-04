<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com//polygon/adminty/default/auth-normal-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Feb 2019 09:50:05 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Task </title>
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">

    <link rel="icon" href="https://colorlib.com//polygon/adminty/files/assets/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('/resources/bower_components/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{asset('/resources/assets/icon/themify-icons/themify-icons.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('/resources/assets/icon/icofont/css/icofont.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('/resources/assets/css/style.css')}}">
</head>
<body class="fix-menu">

<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
        </div>
    </div>
</div>

<section class="login-block">

    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <form class="md-float-material form-material" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center">Sign In</h3>
                                </div>
                            </div>
                            <div class="form-group form-primary{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Your Email Address">
                                @if ($errors->has('email'))
                                    <span class="form-bar">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group form-primary{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="form-bar">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="row m-t-25 text-left">
                                <div class="col-12">
                                    <div class="checkbox-fade fade-in-primary d-">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                            <span class="text-inverse">Remember me</span>
                                        </label>
                                    </div>
                                    <div class="forgot-phone text-right f-right">
                                        <a class="text-right f-w-600" href="{{ route('register') }}">
                                            Register
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-t-30">
								<div class="col-md-6">
									<a href="{{ url('/redirect') }}" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20"><i class="fa fa-google"></i>Google Sign in</a>
								</div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Sign in</button>
                                </div>
                            </div>
                            <hr />
                            <!--<div class="row">
                                <div class="col-md-10">
                                    <p class="text-inverse text-left"><a href="{{ route('register') }}"><b class="f-w-600">Register</b></a></p>
                                </div>
                                <div class="col-md-2">
                                    <img src="{{asset('/resources/assets/images/auth/Logo-small-bottom.png')}}" alt="small-logo.png">
                                </div>
                            </div>-->
                        </div>
                    </div>
                </form>

            </div>

        </div>

    </div>

</section>

<script type="text/javascript" src="{{asset('/resources/bower_components/jquery/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/resources/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/resources/bower_components/popper.js/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/resources/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>

<script type="text/javascript" src="{{asset('/resources/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>

<script type="text/javascript" src="{{asset('/resources/bower_components/modernizr/js/modernizr.js')}}"></script>
<script type="text/javascript" src="{{asset('/resources/bower_components/modernizr/js/css-scrollbars.js')}}"></script>

<script type="text/javascript" src="{{asset('/resources/bower_components/i18next/js/i18next.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/resources/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/resources/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/resources/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/resources/assets/js/common-pages.js')}}"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
</body>

<!-- Mirrored from colorlib.com//polygon/adminty/default/auth-normal-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Feb 2019 09:50:05 GMT -->
</html>
