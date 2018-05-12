<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"content="IE=edge">
        <meta name="viewport"content="width=device-width, initial-scale=1">
    <title>ARCHIBASE</title>{!!Html::style('css/bootstrap.min.css')!!}{!!Html::style('css/metisMenu.min.css')!!}{!!Html::style('css/sb-admin-2.css')!!}{!!Html::style('css/icomoon/style.css')!!}{!!Html::style('css/font-awesome.min.css')!!}{!!Html::style('css/style.css')!!}{!!Html::style('css/fonts.css')!!}</head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-static-top fixed"role="navigation"style="margin-bottom: 0">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button"class="navbar-toggle collapsed"data-toggle="collapse"data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- Branding Image -->
                    <a class="navbar-brand">
                        <span class="icon-actor"></span><span class="icon-tab"></span><span class="icon-data"></span>
                    </a>
                </div>
                <div class="collapse navbar-collapse"id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li>  <a href="#"class="dropdown-toggle"data-toggle="dropdown"role="button"aria-haspopup="true"aria-expanded="false">Archivo <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="" data-toggle="modal" data-target="#modalNproj">Nuevo</a></li>
                            <li><a href="{{ url('/customer') }}">Clientes</a></li>
                        </ul> 
                    </li>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                    <li class="dropdown">
                        <a href="#"class="dropdown-toggle"data-toggle="dropdown"role="button"aria-expanded="false">{{Auth::user()->name}}<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu"role="menu">
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Cerrar sesión</a></li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </nav>
    <div id="page-wrapper">
        @yield('content')
    </div>

        </div>
        <div class="modal fade" id="modalNproj" role="dialog">
            <div class="modal-dialog">
                @include('customers.new') 
            </div>
        </div>
        {!!Html::script('js/jquery.min.js')!!}
        {!!Html::script('js/bootstrap.min.js')!!}
        {!!Html::script('js/metisMenu.min.js')!!}
        {!!Html::script('js/sb-admin-2.js')!!}
        {!!Html::script('js/custom.js')!!}
        </body>
    </html>