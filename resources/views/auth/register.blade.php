<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Task </title>
  
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
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="text-align:center;font-weight:bold">
                <div class="card-header"><a href="{{ route('login') }}"><b class="f-w-600">Login</b></a> / <a href="{{ route('register') }}"><b class="f-w-600">Register</b></a></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">Role</label>

                            <div class="col-md-6" style="margin-left: -11%;">
                                <div class="form-check form-check-inline">
								  <input style="margin-top: 6px;margin-left: 0px;" class="form-check-input @error('role') is-invalid @enderror" type="radio" name="role" id="role" value="Admin" checked>
								  <label class="form-check-label" for="inlineRadio1">Admin</label>
								</div>
								<div class="form-check form-check-inline">
								  <input style="margin-top: 6px;margin-left: 0px;" class="form-check-input @error('role') is-invalid @enderror" type="radio" name="role" id="role1" value="User">
								  <label class="form-check-label" for="inlineRadio2">User</label>
								</div>

                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
							<div class="col-md-6">
								<a href="{{ url('/redirect') }}" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20"><i class="fa fa-google"></i> Google Sign in</a>
							</div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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

</body>
</html>
