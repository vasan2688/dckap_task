
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Task </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" href="https://colorlib.com//polygon/adminty/files/assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('/resources/bower_components/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/resources/bower_components/sweetalert/css/sweetalert.css')}}">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('/resources/assets/icon/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/resources/assets/icon/icofont/css/icofont.css')}}">
    <link rel="stylesheet" href="{{ asset('/resources/assets/pages/chart/radial/css/radial.css')}}" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{ asset('/resources/assets/icon/feather/css/feather.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/resources/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/resources/assets/css/jquery.mCustomScrollbar.css')}}">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">
    <script type="text/javascript" src="{{ asset('/resources/bower_components/jquery/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/resources/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/resources/bower_components/popper.js/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/resources/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('/resources/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>

    <script type="text/javascript" src="{{ asset('/resources/bower_components/modernizr/js/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/resources/bower_components/modernizr/js/css-scrollbars.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/resources/bower_components/sweetalert/js/sweetalert.min.js')}}"></script>
    {{--<script type="text/javascript" src="{{ asset('/resources/assets/js/modal.js')}}"></script>--}}
    {{--<script type="text/javascript" src="{{ asset('/resources/assets/js/modalEffects.js')}}"></script>--}}
    <script type="text/javascript" src="{{ asset('/resources/bower_components/chart.js/js/Chart.js')}}"></script>

    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="{{ asset('/resources/assets/pages/google-maps/gmaps.js')}}"></script>

    <script src="{{ asset('/resources/assets/pages/widget/gauge/gauge.min.js')}}"></script>
    <script src="{{ asset('/resources/assets/pages/widget/amchart/amcharts.js')}}"></script>
    <script src="{{ asset('/resources/assets/pages/widget/amchart/serial.js')}}"></script>
    <script src="{{ asset('/resources/assets/pages/widget/amchart/gauge.js')}}"></script>
    <script src="{{ asset('/resources/assets/pages/widget/amchart/pie.js')}}"></script>
    <script src="{{ asset('/resources/assets/pages/widget/amchart/light.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print"></script>

    <script type="text/javascript" src="{{ asset('/resources/bower_components/i18next/js/i18next.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/resources/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/resources/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/resources/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>

    <script src="{{ asset('/resources/assets/pages/data-table/js/data-table-custom.js')}}"></script>

    <script src="{{ asset('/resources/assets/js/pcoded.min.js')}}"></script>
    <script src="{{ asset('/resources/assets/js/vartical-layout.min.js')}}"></script>
    <script src="{{ asset('/resources/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    {{--<script type="text/javascript" src="{{ asset('/resources/assets/pages/dashboard/crm-dashboard.min.js')}}"></script>--}}
    <script type="text/javascript" src="{{ asset('/resources/assets/js/script.js')}}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
</head>

<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
        </div>
    </div>
</div>

<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">
                <div class="navbar-logo">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="feather icon-menu"></i>
                    </a>
                    <a href="index.html">
                        {{ Auth::user()->name }} - {{ Auth::user()->role }}
                    </a>
                    <a class="mobile-options">
                        <i class="feather icon-more-horizontal"></i>
                    </a>
                </div>
                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li class="header-search">
                            <div class="main-search morphsearch-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#!" onclick="javascript:toggleFullScreen()">
                                <i class="feather icon-maximize full-screen"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">

                        <li class="user-profile header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{ asset('/resources/assets/images/avatar-4.jpg')}}" class="img-radius" alt="User-Profile-Image">
                                    <span> {{ Auth::user()->name }} </span>
                                    <i class="feather icon-chevron-down"></i>
                                </div>
                                <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <a href="#!">
                                            <i class="feather icon-settings"></i> Settings
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> <i class="feather icon-log-out"></i>
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="sidebar" class="users p-chat-user showChat">
            <div class="had-container">
                <div class="card card_main p-fixed users-main">
                    <div class="user-box">
                        <div class="chat-inner-header">
                            <div class="back_chatBox">
                                <div class="right-icon-control">
                                    <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                                    <div class="form-icon">
                                        <i class="icofont icofont-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-friend-list">
                            <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius img-radius" src="{{ asset('/resources/assets/images/avatar-4.jpg')}}" alt="Generic placeholder image ">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Josephin Doe</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="{{ asset('/resources/assets/images/avatar-4.jpg')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Lary Doe</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="{{ asset('/resources/assets/images/avatar-4.jpg')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Alice</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="{{ asset('/resources/assets/images/avatar-4.jpg')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Alia</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="{{ asset('/resources/assets/images/avatar-4.jpg')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Suzen</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="showChat_inner">
            <div class="media chat-inner-header">
                <a class="back_chatBox">
                    <i class="feather icon-chevron-left"></i> Josephin Doe
                </a>
            </div>
            <div class="media chat-messages">
                <a class="media-left photo-table" href="#!">
                    <img class="media-object img-radius img-radius m-t-5" src="{{ asset('/resources/assets/images/avatar-4.jpg')}}" alt="Generic placeholder image">
                </a>
                <div class="media-body chat-menu-content">
                    <div class="">
                        <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
            </div>
            <div class="media chat-messages">
                <div class="media-body chat-menu-reply">
                    <div class="">
                        <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
                <div class="media-right photo-table">
                    <a href="#!">
                        <img class="media-object img-radius img-radius m-t-5" src=".{{ asset('/resources/assets/images/avatar-4.jpg')}}" alt="Generic placeholder image">
                    </a>
                </div>
            </div>
            <div class="chat-reply-box p-b-20">
                <div class="right-icon-control">
                    <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                    <div class="form-icon">
                        <i class="feather icon-navigation"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                @include('layouts.side_bar')
                @yield('content')
            </div>
        </div>
    </div>
</div>




