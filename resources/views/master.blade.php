<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        @yield('head')
        
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,600">
        <!-- Master Style -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/master.css') }}" >
        <!-- Hamburger Menu -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Hamburger Functionality -->
        <script type="text/javascript" src="{{ asset('js/topnav.js') }}"></script>
        @yield('style')
    </head>
    <body>
        <div class="topnav">
            <a id="home" href="/" class="active">freelancingweb.dev</a>
            <!-- <img src="https://pngimage.net/wp-content/uploads/2018/06/orange-icon-png-3.png"> -->
            <!-- Navigation links (hidden by default) -->
            <div id="myLinks">
                <a href="/skills">Skills</a>
                <a href="/projects">Projects</a>
                <a href="/contact">Contact</a>
                <a href="/about">About</a>
            </div>
            <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
            <a href="javascript:void(0);" class="icon" onclick="clickTopNav()">
            <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="flex-center position-ref full-height" onclick="closeTopNav()">
            <div class="content">
                @yield('content')
            </div>
        </div>
        <div class="footer links">
            <a href="https://laravel.com/docs">Docs</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://blog.laravel.com">Blog</a>
            <a href="https://nova.laravel.com">Nova</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://vapor.laravel.com">Vapor</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </body>
</html>
