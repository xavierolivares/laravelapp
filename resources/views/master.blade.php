<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        @yield('head')
        <!-- Hamburger Menu -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Hamburger Functionality -->
        <script>
            function myFunction() {
                var x = document.getElementById("myLinks");
                if (x.style.display === "block") {
                    x.style.display = "none";
                } else {
                    x.style.display = "block";
                }
            }

            function topNavShutoff() {
                var x = document.getElementById("myLinks");
                if (x.style.display === "block") {
                    x.style.display = "none";
                }
            }
        </script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Niconne&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            #home {
            /* font-family: 'Niconne', cursive; */
            /* text-transform: uppercase; */
            }

            /* Style the navigation menu */
            .topnav {
            overflow: hidden;
            background-color: #333;
            position: relative;
            border-radius: 0 0 10px 10px;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.5),
            10px 10px 15px rgba(0,0,0,0.5),
            -1px -1px 30px rgba(0,0,0,0.2);
            }

            /* Hide the links inside the navigation menu (except for logo/home) */
            .topnav #myLinks {
            display: none;
            }

            /* Style navigation menu links */
            .topnav a {
            color: white;
            padding: 14px 16px;
            text-decoration: none;
            display: block;
            font-size:30px;
            }

            /* Style the hamburger menu */
            .topnav a.icon {
            background: black;
            display: block;
            position: absolute;
            right: 0;
            top: 0;
            }

            /* Add a grey background color on mouse-over */
            .topnav a:hover {
            background-color: white;
            color: #FF7F50;
            }

            /* Style the active link (or home/logo) */
            .active {
            background-color: #FF7F50;
            color: white;
            }

            body {
                min-height: 822px;
                min-width: 330px;
                margin-bottom: 100px;
                clear: both;
            }

            html, body {
                background-color: #fff;
                color: #FFFFFF;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
                height: 100vh;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                /* align-items: center; */
                display: flex;
                justify-content: center;
                /* margin-top: 20px; */
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .links > a {
                color: #FFFFFF;
                padding: 0 25px;
                /* font-size: 20px; */
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                /* text-transform: uppercase; */
            } 

            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: #FF7F50;
                color: white;
                text-align: center;
                border-radius: 10px 10px 0 0;
                box-shadow: -1px -1px 30px rgba(0,0,0,0.5), 2px 2px 5px rgba(0,0,0,0.5),
            10px 10px 15px rgba(0,0,0,0.5),
            -1px -1px 30px rgba(0,0,0,0.2);
            }
            
        </style>
        @yield('style')
    </head>
    <body>
        <div class="topnav">
            <a id="home" href="/" class="active">freelancingweb.dev</a>
            <!-- <img src="https://pngimage.net/wp-content/uploads/2018/06/orange-icon-png-3.png"> -->
            <!-- Navigation links (hidden by default) -->
            <div id="myLinks">
                <a href="/">Skills</a>
                <a href="/contact">Contact</a>
                <a href="/about">About</a>
            </div>
            <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="flex-center position-ref full-height" onclick="topNavShutoff()">
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