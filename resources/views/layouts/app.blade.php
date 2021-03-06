<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="/js/jquery-3.1.0.js"></script>
    <script src="/js/mdb.min.js"></script>
    <script src="/js/tether.min.js"></script>
    <script src="/js/materialize.min.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all"
          rel="stylesheet"
          type="text/css"/>
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    {{--Css do template--}}
    <title>Habitat - A Professional Bootstrap Template</title>
    <!-- Meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Favicon -->
    
    <link href="favicon.ico" rel="shortcut icon">
    <!-- Bootstrap Core CSS -->
{{--    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" >--}}
    <!-- Template CSS -->
    {{--<link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css" >--}}
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/nexus.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/w3.css') }}" rel="stylesheet" type="text/css" >

    <!-- Google Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
{{--fim do template--}}
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel ="<?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>"
    </script>
</head>
<body>
    <div id="app">

        <div id="body-bg">



            <!-- Phone/Email -->
            <div id="pre-header" class="background-gray-lighter">
                <div class="container no-padding">
                    <div class="row hidden-xs">
                        <div class="col-sm-6 padding-vert-5">

                                @if (Auth::guest())
                                    <div class="row top-right links">
                                        {{--<div >--}}
                                            <div col-md-8>
                                            <a href="{{ url('/login') }}"><i class="fa fa-user fa-fw"></i>Login</a>
                                            <a href="{{ url('/utentes/create') }}"><i class="fa fa-edit fa-fw"></i>Register</a>
                                                <strong >Email:</strong>&nbsp;achei.fakul@uem.ac.mz

                                            </div>
                                        {{--</div>--}}
                                        {{--<div class="col-sm-6 text-right padding-vert-5">--}}
                                            {{--<strong>Email:</strong>&nbsp;achei.fakul@uem.ac.mz--}}
                                        {{--</div>--}}
                                    </div>

                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::user()->name }}
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{ url('/logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>

                                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Phone/Email -->
            <!-- Header -->
            <div id="header">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.blade.html" title="">
                                <img src={{ asset('/img/logo.png') }} alt="Logo" />
                            </a>
                        </div>

                    </div>

                    </div>
                </div>
            </div>


            <!-- End Header -->
            <!-- Top Menu -->
            <div id="hornav" class="bottom-border-shadow">
                <div class="container no-padding border-bottom">
                    <div class="row">
                        <div class="col-md-8 no-padding">
                            <div class="visible-lg" id="sub-header">
                                <ul id="hornavmenu" class="nav navbar-nav">
                                    <li  {{ (Request::is('/home') ? 'class=active' : '') }}>
                                        <a  href="{{url('/home')}}"  class="fa-home">Página Inicial</a>
                                    </li>
                                    <li>
                                       <a href="{{ URL::to('/perdidos') }}"> <span class="fa-th ">Perdidos</span></a>
                                        <ul class="dropdown-menu" role="menu">

                                                <li>
                                                    <a href="{{ route('perdidos.index') }}"
                                                            >
                                                        Listar Perdidos
                                                    </a>
                                                    <a href="{{ route('perdidos.create') }}"
                                                            >
                                                        Reportar Perdido
                                                    </a>

                                                </li>

                                        </ul>
                                    </li>
                                    <li {{ (Request::is('/achados') ? 'class=active' : '') }}}>
                                        <a href="{{url('/achados')}}"> <span class="fa-copy ">Achados</span></a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{ route('achados.index') }}"
                                                >
                                                    Listar Achados
                                                </a>
                                                <a href="{{ route('achados.create') }}"
                                                >
                                                    Reportar Achado
                                                </a>

                                            </li>
                                        </ul>
                                    </li>


                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 no-padding">
                            <ul class="social-icons pull-right">
                                <li class="social-rss">
                                    <a href="#" target="_blank" title="RSS"></a>
                                </li>
                                <li class="social-twitter">
                                    <a href="#" target="_blank" title="Twitter"></a>
                                </li>
                                <li class="social-facebook">
                                    <a href="#" target="_blank" title="Facebook"></a>
                                </li>
                                <li class="social-googleplus">
                                    <a href="#" target="_blank" title="Google+"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Menu -->
            <!-- === END HEADER === -->

        @yield('content')
    </div>
    <script src="/js/custom.js"></script>
    <script src="/js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    <script type="text/javascript" src="/js/jquery-3.1.0.js"></script>
    <script type="text/javascript" src="/js/jquery.quicksearch.js"></script>


    <script langauage="javascript">
        function showMessage(value){
            document.getElementById("message").innerHTML = value;
        }
    </script>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script>
    $(function(){
    // this will get the full URL at the address bar
    var url = window.location.href;

    // passes on every "a" tag
    $("#sub-header a").each(function() {
    // checks if its the same on the address bar
    if(url == (this.href)) {
    $(this).closest("li").addClass("active");
    }
    });
    });
    </script>
</body>
</html>
