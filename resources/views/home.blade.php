@extends('master')

@section('title', 'Home')

@section('content')
    <style>
    /* #home {
    font-family: 'Niconne', cursive;
    } */

    /* Style the navigation menu */
    .topnav {
    overflow: hidden;
    background-color: #333;
    position: relative;
    /* border-radius: 0 0 10px 10px; */
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
    font-size: 30px;
    display: block;
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

    html, body {
        background-color: #fff;
        color: #FFFFFF;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
        background-image: url('https://img5.goodfon.com/wallpaper/nbig/1/45/citrus-oranges-fruits.jpg');
        background-size: cover;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        /* align-items: center; */
        display: flex;
        justify-content: center;
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

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #FFFFFF;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }            
        </style>
    <div class="title m-b-md">Home</div>
    <div class="links">
        <a href="https://laravel.com/docs">Docs</a>
        <a href="https://laracasts.com">Laracasts</a>
        <a href="https://laravel-news.com">News</a>
        <a href="https://blog.laravel.com">Blog</a>
        <a href="https://nova.laravel.com">Nova</a>
        <a href="https://forge.laravel.com">Forge</a>
        <a href="https://vapor.laravel.com">Vapor</a>
        <a href="https://github.com/laravel/laravel">GitHub</a>
    </div>
@endsection