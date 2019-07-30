<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') </title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset('apple-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">

    <link rel="stylesheet" href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/jqvmap/dist/jqvmap.min.css')}}">



    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><h3>UFT </h3></a>
                <a class="navbar-brand hidden" href="./"><img src="{{asset('images/logo2.png')}}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="/home"> <i class="menu-icon ti-world"></i>Home </a>
                    </li>
                    <!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Registration</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="ti-plus"></i><a href="/agentregister">Register Agent</a></li>
                            <li><i class="ti-server"></i><a href="/moneyregister">Register Money</a></li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-user"></i>Agents</a>
                        <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon ti-menu"></i><a href="/agentslist">List of Agents</a></li>
                        <li><i class="menu-icon ti-exchange-vertical"></i><a href="/archy">District Hierarchy</a></li>
                        <li><i class="menu-icon ti-menu"></i><a href="/agenthead">List of AgentHeads</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-id-badge"></i>Members</a>
                        <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon ti-list-ol"></i><a href="/members">List of Members</a></li>
                                <li><i class="menu-icon ti-export"></i><a href="/upgrade">Recommended for Upgrade</a></li>

                        </ul>

                    </li>


                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="/funding">Funding</a></li>



                            <li><i class="menu-icon fa fa-area-chart"></i><a href="/graph">Donations</a></li>


                            <li><i class="menu-icon ti-slice"></i><a href="/enroll">Enrollment</a></li>
                        </ul>
                    </li>
                    <li class="active">
                            <a href="/tre" > <i class="menu-icon ti-money"></i>Treasury</a>
                        </li>

                        <li class="active">
                            <a href="/pay" > <i class="menu-icon ti-receipt"></i>Payments</a>
                        </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="" >



                <div id="app">

                        <nav class="navbar navbar-expand-md navbar-light"  >
                            <div class="container">

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <!-- Left Side Of Navbar -->
                                    <div class="header-left">


                                            <div class="dropdown for-notification">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" style="color:white; " id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-bell"></i>
                                                    <span class="count bg-danger">5</span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="notification">
                                                    <p class="red">You have 3 Notification</p>

                                                </div>
                                            </div>

                                            <div class="dropdown for-message">
                                                <a>
                                                <button class="btn btn-secondary dropdown-toggle" type="button"  style="color:white;" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ti-email"></i>
                                                    <span class="count bg-primary">9</span>
                                                </button>
                                            </a>
                                                <div class="dropdown-menu" aria-labelledby="message">
                                                    <p class="red">You have 4 Mails</p>

                                                </div>
                                            </div>

                                            <button class="search-trigger"><i class="fa fa-search"></i></button>
                                            <div class="form-inline">
                                                <form class="search-form">
                                                    <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                                    <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                                                </form>
                                            </div>
                                        </div>


                                    <!-- Right Side Of Navbar -->
                                    <ul class="navbar-nav ml-auto">
                                        <!-- Authentication Links -->
                                        @guest
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @else
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                  logged in as:<p><span class="caret" style="color:greenyellow"></u> {{ Auth::user()->name }}</u> </span>
                                                    <span class="ti-angle-double-down"></span> </p>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" style="color:red" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }} <span class="ti-unlink"></span>
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                        @endguest
                                    </ul>
                                </div>
                            </div>
                        </nav>

        </header><!-- /header -->
        <!-- Header-->




        <div class="content mt-3" style="margin-top:2px">
            @include('flash-message')
            @yield('content')

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('jquery-1.7.2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('functions.js')}}"></script>

    <script src="{{asset('vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/dashboard.js')}}"></script>
    <script src="{{asset('assets/js/widgets.js')}}"></script>
    <script src="{{asset('vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
